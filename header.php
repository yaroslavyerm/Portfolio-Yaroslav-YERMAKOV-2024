<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
<link rel="icon" type="image/x-icon" href="https://yermakov.fr/wp-content/uploads/2024/11/favicon.ico">
    <?php wp_head(); ?>
  </head>
  <body :class="{noscroll:menuIsOpen,}" x-data="$store.menu">
      <header>
        <div class="menu_mobile">
          <div class="menu_mobile_control">
              <a class="logo" href="https://yermakov.fr" aria-label="Home | Yaroslav Yermakov">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <path d="M48 0H0V48H48V0Z" fill="#CFFF5A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2033 44.992H23.4999V36.097H17.6732L13.2033 44.992Z" fill="#9C9EFF"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1751 35.0976H23.4999V24.5001L18.1751 35.0976Z" fill="#9C9EFF"/>
                <path d="M14.2027 13.2539C14.2027 18.5929 18.2861 22.9771 23.4999 23.4567V3.05115C18.2861 3.53076 14.2027 7.91498 14.2027 13.2539Z" fill="#9C9EFF"/>
                <path d="M24.55 3.00721C24.5336 3.00721 24.5165 3.00721 24.5001 3.00721V23.4999C24.5165 23.4999 24.5336 23.4999 24.55 23.4999C30.2092 23.4999 34.7967 18.9124 34.7967 13.2532C34.7967 7.594 30.2092 3.00647 24.55 3.00647V3.00721Z" fill="#9C9EFF"/>
                <path d="M24.5001 44.992C24.5165 44.992 24.5336 44.992 24.55 44.992C30.2092 44.992 34.7967 40.4045 34.7967 34.7453C34.7967 29.0861 30.2092 24.4986 24.55 24.4986C24.5336 24.4986 24.5165 24.4986 24.5001 24.4986V44.992Z" fill="#9C9EFF"/>
              </svg>
              </a>
          
              <button aria-controls="menu" @click="menuIsOpen = true">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="19" viewBox="0 0 28 19" fill="none">
                <g clip-path="url(#clip0_512_3015)">
                  <path d="M1.16666 1.16666H26.8333" stroke="#280089" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1.16666 9.33334H26.8333" stroke="#280089" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M1.16666 17.5H26.8333" stroke="#280089" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <defs>
                  <clipPath id="clip0_512_3015">
                    <rect width="28" height="18.6667" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
              </button>
            </div>
          <nav class="principal menu_overlay"
          x-show="menuIsOpen"
          x-transition.duration.800ms>
          <div class="menu_mobile_control">
              <a class="logo" href="https://yermakov.fr" aria-label="Home | Yaroslav Yermakov">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <path d="M48 0H0V48H48V0Z" fill="#CFFF5A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2033 44.992H23.4999V36.097H17.6732L13.2033 44.992Z" fill="#9C9EFF"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1751 35.0976H23.4999V24.5001L18.1751 35.0976Z" fill="#9C9EFF"/>
                <path d="M14.2027 13.2539C14.2027 18.5929 18.2861 22.9771 23.4999 23.4567V3.05115C18.2861 3.53076 14.2027 7.91498 14.2027 13.2539Z" fill="#9C9EFF"/>
                <path d="M24.55 3.00721C24.5336 3.00721 24.5165 3.00721 24.5001 3.00721V23.4999C24.5165 23.4999 24.5336 23.4999 24.55 23.4999C30.2092 23.4999 34.7967 18.9124 34.7967 13.2532C34.7967 7.594 30.2092 3.00647 24.55 3.00647V3.00721Z" fill="#9C9EFF"/>
                <path d="M24.5001 44.992C24.5165 44.992 24.5336 44.992 24.55 44.992C30.2092 44.992 34.7967 40.4045 34.7967 34.7453C34.7967 29.0861 30.2092 24.4986 24.55 24.4986C24.5336 24.4986 24.5165 24.4986 24.5001 24.4986V44.992Z" fill="#9C9EFF"/>
              </svg>
              </a>
          
              <button aria-controls="menu" @click="menuIsOpen = false">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
            <path d="M2.8714 2.70013L27.7501 27.5788" stroke="#280089" stroke-width="2" stroke-linecap="round"/>
            <path d="M2.25 27.5788L27.1287 2.70013" stroke="#280089" stroke-width="2" stroke-linecap="round"/>
          </svg>
              </button>
            </div>
            <?php
            wp_nav_menu ( array (
             'theme_location' => 'header-menu-mobile'
             ) ); ?>
          </nav>
        </div>

        <div class="menu_desktop">
          <a class="logo" href="https://yermakov.fr" aria-label="Home | Yaroslav Yermakov">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                <path d="M48 0H0V48H48V0Z" fill="#CFFF5A"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2033 44.992H23.4999V36.097H17.6732L13.2033 44.992Z" fill="#9C9EFF"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1751 35.0976H23.4999V24.5001L18.1751 35.0976Z" fill="#9C9EFF"/>
                <path d="M14.2027 13.2539C14.2027 18.5929 18.2861 22.9771 23.4999 23.4567V3.05115C18.2861 3.53076 14.2027 7.91498 14.2027 13.2539Z" fill="#9C9EFF"/>
                <path d="M24.55 3.00721C24.5336 3.00721 24.5165 3.00721 24.5001 3.00721V23.4999C24.5165 23.4999 24.5336 23.4999 24.55 23.4999C30.2092 23.4999 34.7967 18.9124 34.7967 13.2532C34.7967 7.594 30.2092 3.00647 24.55 3.00647V3.00721Z" fill="#9C9EFF"/>
                <path d="M24.5001 44.992C24.5165 44.992 24.5336 44.992 24.55 44.992C30.2092 44.992 34.7967 40.4045 34.7967 34.7453C34.7967 29.0861 30.2092 24.4986 24.55 24.4986C24.5336 24.4986 24.5165 24.4986 24.5001 24.4986V44.992Z" fill="#9C9EFF"/>
              </svg>
              </a>
              <nav class="menu_desktop_nav">
                <?php
            wp_nav_menu ( array (
             'theme_location' => 'header-menu-desktop'
             ) ); ?>
              </nav>
        </div>
      </header>