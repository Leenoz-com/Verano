(function ($, window, document) {
  'use strict';

  const BREAKPOINT = 1024;

  // Toggle the main menu state
  function collapse_menu(action) {
    $("body").toggleClass('menu-collapsed', action);
    $("body").toggleClass('menu-opened', !action);

    if (window.innerWidth < BREAKPOINT) {
      $(".main-menu").toggleClass('opened', !action);
    } else {
      $(".main-menu").removeClass('opened');
    }

    $(".main-menu .vo-dropdown-menu").slideUp(function () {
      $(this).removeClass('opened');
      $(this).removeAttr('style');
    });

    $('#collapse-menu').attr('aria-expanded', $('body').hasClass('menu-collapsed') ? 'false' : 'true');
  }

  // Safe containment check: is target inside element?
  function isInside(target, selectorOrElement) {
    if (!target) return false;
    const $el = typeof selectorOrElement === 'string' ? $(selectorOrElement) : $(selectorOrElement);
    if (!$el.length) return false;
    return $(target).closest($el).length > 0 || $(target).is($el);
  }

  $(function () {

    // Initialize menu state based on viewport size
    if (window.innerWidth < BREAKPOINT) {
      $("body").addClass('menu-collapsed');
    }

    // Window resize handling
    $(window).on('resize', function () {
      if (window.innerWidth < BREAKPOINT && !$('body').hasClass('menu-collapsed')) {
        collapse_menu(true);
      } else if (window.innerWidth >= BREAKPOINT && $('body').hasClass('menu-collapsed')) {
        collapse_menu(false);
      }
    });

    // Toggle menu button
    $('#collapse-menu').on('click', function () {
      collapse_menu($('body').hasClass('menu-opened') || !$('body').hasClass('menu-collapsed'));
    });

    // Close menu when clicking outside on small screens
    $('body').on('click', function (e)
    {
      // Close user dropdown
      if (window.innerWidth <= BREAKPOINT && 
        $('#navigation .user-block .vo-dropdown-menu').hasClass('opened') &&
        !isInside(e.target, '#navigation .user-block')) 
      {
        const $menu = $('#navigation .user-block');
        closeMenu($menu[0]);
      }
    });

    // tab/dropdown hover and click behavior
    const openMenu = function (menu)
    {
      const is_submenu = $(menu).find('> a.dropdown-toggle').length > 0;
      const itemRect = menu.getBoundingClientRect();
      const $menu = $(menu).find('> .vo-dropdown-menu');
      if (!$menu.length) return;

      // Reset any previous styles
      $menu.removeAttr('style');
      
      // If this dropdown list is supposed to be aligned to the end
      const is_end = $menu.hasClass('dropdown-end');

      // Check if the document is RTL
      const is_RTL = document.documentElement.dir === "rtl";

      const start = is_RTL ? 'right' : 'left';
      const end   = is_RTL ? 'left' : 'right';

      // CSS position object
      const position = {
        top: (is_submenu ? itemRect.top - 7 : itemRect.bottom) + "px"
      }
      
      // Function to calculate directional position
      const dirCalc = function(val, is_overflow = false)
      {
        // Coefficients based on text direction
        let leftCoeff = is_RTL ? 0 : -1;
        let rightCoeff = is_RTL ? -1 : 0;

        // Signs for start and end based on text direction
        let startSign = is_RTL ? -1 : 1;
        let endSign = -startSign;

        // Adjust coefficients if checking for overflow
        if (is_overflow)
        {
          leftCoeff = Math.abs(leftCoeff) - 1;
          rightCoeff = Math.abs(rightCoeff) - 1;
        }
        
        // If dropdown is aligned to the end
        if (is_end) {
          return (endSign * leftCoeff * window.innerWidth) - (startSign * val)
        }

        return (startSign * rightCoeff * window.innerWidth) - (endSign * val);
      }

      position[is_end ? start : end] = "auto";

      /**
       * If the dropdown is aligned to the end, we want to position it to the end of the item.
       * Force the dropdown list to be at least 10px from the edges (Right/Left) of the screen
       */
      if (is_end) {
        position[end] = Math.max(10, dirCalc(itemRect[end])) + "px";
      } else if (is_submenu) {
        position[start] = Math.abs(dirCalc(itemRect[end])) + "px";
      } else {
        position[start] = Math.max(10, dirCalc(itemRect[start])) + "px";
      }

      $menu.addClass('opened').css(position);

      $(menu).attr('aria-expanded','true');

      /* 
       * If the dropdown list is overflowing the screen, we want to position it to the start of the item.
       * e.g. If there is a submenu that should open by default to the right but there is not enough space, it will automatically open to the left.
       */
      requestAnimationFrame(() => {
        const overflowing = {};

        overflowing[start] = "auto";
        overflowing[end] = (is_submenu ? Math.abs(dirCalc(itemRect[start], 1)) : Math.max(10, dirCalc(itemRect[start], 1))) + "px";

        const rect = $menu[0].getBoundingClientRect();

        if ((!is_RTL && rect.right > window.innerWidth) || (is_RTL && rect.left < 0)) {
          $menu.css(overflowing);
        }
      });
    }

    // Close menu function
    const closeMenu = function (menu) {
      const $menu = $(menu).find('> .vo-dropdown-menu');
      $menu.addClass('closing');

      // Allow CSS animation to play before removing classes
      setTimeout(() => {
        $menu.removeClass('opened closing');
        $(menu).attr('aria-expanded','false');
      }, 100);
    }

    const $tabTriggers = $('#tab-bar li, #navigation .user-block');

    // Hover handling for tab and user block
    $tabTriggers.on('mouseenter', function () {
      if (window.innerWidth < BREAKPOINT) return;
      openMenu(this);
    })
    .on('mouseleave', function ()
    {
      if (window.innerWidth < BREAKPOINT) return;
      closeMenu(this);
    })
    
    // Click handling for user block and tab
    $('#navigation .user-block').on('click', function (e) {
      if (isInside(e.target, '#navigation .user-info')) return;
      e.preventDefault();
      if ($(this).find('.vo-dropdown-menu').hasClass('opened')) {
        closeMenu(this);
      } else {
        openMenu(this);
      }
    });
    
    // Click handling for tab on small screens
    $('#tab-bar li a').on('click', function (e)
    {
      if (window.innerWidth >= BREAKPOINT) return;

      if ($(this).next('.vo-dropdown-menu').length)
        e.preventDefault();

      $(this).next('.vo-dropdown-menu').stop(true, true).slideToggle(300);
    });

    // Remove loading state
    $('body').removeClass('loading');

    // Verano has been loaded
    window.verano = window.verano || {};
    window.verano.loaded = true;
  });

})(jQuery, window, document);
