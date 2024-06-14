<!DOCTYPE html><html lang="en" class="v2fLMH8w3xgUEQcl63H9"><head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta name="author" content="Themesberg">
<meta name="generator" content="Hugo 0.88.1">

<title>ALMA ADMIN</title>

<link rel="canonical" href="https://flowbite.com/application-ui/demo/">

<link rel="icon" href="{{ asset('img/link.png') }}"/>

<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('assets/styles/tailwind.css')}}" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://flowbite.com/application-ui/demo/app.css">
<!--iconos-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="manifest" href="https://flowbite.com/application-ui/demo/site.webmanifest">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@">
<meta name="twitter:creator" content="@">
<meta name="twitter:title" content="Tailwind CSS Dashboard - Flowbite">
<meta name="twitter:description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta name="twitter:image" content="https://flowbite.com/application-ui/demo">

<!-- Facebook -->
<meta property="og:url" content="https://flowbite.com/application-ui/demo/">
<meta property="og:title" content="Tailwind CSS Dashboard - Flowbite">
<meta property="og:description" content="Get started with a premium admin dashboard layout built with Tailwind CSS and Flowbite featuring 21 example pages including charts, kanban board, mailing system, and more.">
<meta property="og:type" content="website">
<meta property="og:image" content="https://flowbite.com/application-ui/demo/images/og-image.jpg">
<meta property="og:image:type" content="image/png">





<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141734189-9');
</script>


<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
    } else {
        document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
    }
</script>



<script>
 document.addEventListener('DOMContentLoaded', function () {
            let tema = document.getElementById('theme-toggle');
            let img = document.getElementById('laimg');
            
            let cambio = () => {
                if (document.documentElement.classList.contains('dark')) {
                    img.src = "{{ asset('img/link.png') }}";
                } else {
                    img.src = "{{ asset('img/link2.png') }}";
                }
            };

           
            cambio();

            tema.addEventListener('click', () => {
                document.documentElement.classList.toggle('dark');
                cambio();
            });
        });
</script>
  </head>
  <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">
    


    
<nav class="_LPVUrp9Uina5fcERqWC taX5bm_AMmfFooXEd5Ny t6gkcSf0Bt4MLItXvDJ_ _Ybd3WwuTVljUT4vEaM3 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
  <div class="i8v96MUlFwGv9qJUkAx7 _Cj_M6jt2eLjDgkBBNgI wekyMYEi8zByMSCgzHQ_ W3VHmE2jAiCd1MN9SdsH">
    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2">
      <div class="YRrCJSr_j5nopfm4duUc _HgeI6Dx9I__pBEYsPz0 Q_jg_EPdNf9eDMn1mLI2">
        <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="_SmdlCf6eUKB_V9S5IDj FJRldeiG2gFGZfuKgp88 R9nujHypnXyuHrBww9QK iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM N3Gb8rTHzm26fWGpfaqP ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
          <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="FJRldeiG2gFGZfuKgp88 fhCwost7CSNRc2WSHLFW iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 zm4DJynLOnO_thJwVc_K _017t4M_yp_4rNozqBgD _q0p_O8QLU1paqtuqmI2 XGQIxPVjm_m7D0aLHB7Y yChACvAr1v8czJ2VO22j XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
          <svg id="toggleSidebarMobileHamburger" class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          <svg id="toggleSidebarMobileClose" class="_SmdlCf6eUKB_V9S5IDj YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <a href="{{ url('/dashboard') }}" class="YRrCJSr_j5nopfm4duUc YcuQRAYEep0W4L0BFDfG">
          <img src="{{ asset('img/link2.png') }}" style="max-width: 100px; max-height: 100px;"class="R9nujHypnXyuHrBww9QK mWvJQyBFgwNGEt0h7bSP" alt="" id="laimg">
        </a>

        <!--BUSCAR-->
        <form action="#" method="GET" class="_SmdlCf6eUKB_V9S5IDj Yv6MasvLpkmInnA0LqbC wA_epBjW1krEYDpD4skr">
          <label for="topbar-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
          <div class="ahOqFrhzLjivRe8a1kX_ iRFVFKvV59EjIwjCM62m skGrjyHRlWNG_cHY40Cg">
            <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
              <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" name="email" id="topbar-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl gx_pYWtAG2cJIqhquLbx mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL OyABRrnTV_kvHV7dJ0uE KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
          </div>
        </form>
      </div>
      <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
          
          <button id="toggleSidebarMobileSearch" type="button" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
            <span class="_DVAfiyo21kM68EUVzEQ">Search</span>
            
            <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </button>
          
          
          <!--FONDO-->
          
          <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button" class="PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y _7KA5gD55t2lxf9Jkj20 OPrb_iG5WDy_7F05BDOX BkIbg_JwkgiyRW804Hhu _dylIDxYTN3qgvD4U597 _6wdnQrxT_dGdAdNk5AQ yChACvAr1v8czJ2VO22j mveJTCIb2WII7J4sY22F c8dCx6gnV43hTOLV6ks5 olxDi3yL6f0gpdsOFDhx">
            <svg id="theme-toggle-dark-icon" class="_SmdlCf6eUKB_V9S5IDj ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
            <svg id="theme-toggle-light-icon" class="_SmdlCf6eUKB_V9S5IDj ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
          </button>
          <div id="tooltip-toggle" role="tooltip" class="VPGGthdu3cy_ZP7AL7dt pq2JRWtiWcwYnw3xueNl ZBSHeVK3dmgzHTRX3hLO QhmQ_v3mmDFIP9VaVOfb b9aD6g2qw84oyZNsMO8j _Cj_M6jt2eLjDgkBBNgI c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe y6GKdvUrd7vp_pxsFb57 foDHZclRWUf2bqma2a8U mveJTCIb2WII7J4sY22F fzhbbDQ686T8arwvi_bJ Db4Wzva4DMepJJiQLY7M mc9bwhBTHL8mVzJvl6gz rqOAGYeDo9iWuroePkaf H78G_4yayxs5C3xdFbnK">
              Toggle dark mode
              <div class="tkX8MMO2MiTlgtbd_jG3" data-popper-arrow=""></div>
          </div>
          <!--PERFIL-->
          <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 oA7zcT_42jVeFuWTXQnq">
            <div>
              <button type="button" class="YRrCJSr_j5nopfm4duUc c8dCx6gnV43hTOLV6ks5 RwT9RGumnuqUj7lx7fdb RpVwy4sO7Asb86CncKJ_ _dylIDxYTN3qgvD4U597 KLtw3_OqL54e_zEQU_yi ICV24pqO8p1LJm4GEOgS" id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                <span class="_DVAfiyo21kM68EUVzEQ">Open user menu</span>
                <img class="yNvZ2JlUalNo5uPPv1sf mWvJQyBFgwNGEt0h7bSP RpVwy4sO7Asb86CncKJ_" src="{{ asset('img/link2.png') }}" style="width: 50px;" alt="user photo">
              </button>
            </div>
            
            <div class="_SmdlCf6eUKB_V9S5IDj Jq3rRDG6Hsr3eAZ0KJeH aJF41JQLhtfw_MCGt5Th d3C8uAdJKNl1jzfE9ynq xdunzYpzbwcYs_0Tjgcz _Ybd3WwuTVljUT4vEaM3 Y3FxyuXtj2gecrGXvLEI Zy1Pypi71Xu6guex6urN z30cepEEBLSTPSvWeVPH mngKhi_Rv06PF57lblDI jqg6J89cvxmDiFpnV56r PoeKYEQfG4WfmL9xM6vu" id="dropdown-2">
              <div class="i8v96MUlFwGv9qJUkAx7 RZmKBZs1E1eXw8vkE6jY" role="none">
                <p class="c8dCx6gnV43hTOLV6ks5 __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" role="none">
                {{ Auth::user()->name }}
                </p>
               
              </div>
              <ul class="_bVaO2NfVVP88LtHWYlv" role="none">
                <li>
                  <a href="route('profile.edit')" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem"> {{ __('Profile') }}</a>
                </li>
                
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                            <button type="submit" class="_Vb9igHms0hI1PQcvp_S b9aD6g2qw84oyZNsMO8j RZmKBZs1E1eXw8vkE6jY c8dCx6gnV43hTOLV6ks5 rYHHksRBEMl_guI3q0UQ _7KA5gD55t2lxf9Jkj20 EJIoL6514Ry8r7nh011L RzANcaqunVvlLrO6_tal dMTOiA3mf3FTjlHu6DqW" role="menuitem">
                                {{ __('Sign out') }}
                            </button>
                    </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
<div class="YRrCJSr_j5nopfm4duUc wfz9oKCp_svYP9oWrZuR wBVMFkIGfrKshbvi2gS1 jtAJHOc7mn7b4IKRO59D h8KYXnua2NT4kTVzieom">

  <aside id="sidebar" class="YRrCJSr_j5nopfm4duUc _SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC uQByIGHtHssL9HoPQXR4 TYmpscr1PwuC1dpYXDpM bXWhrLpoBVu4aMI8XQxr e8VqoQNK0mbkRFDL3LMV VQS2tmQ_zFyBOC2tkmto wfz9oKCp_svYP9oWrZuR nUVQqdd_RQjvvOrcRIpD uLPch_bqyJDXwe5tynMV gZ3KuFw1JESHhOJhjT8j _YtPVN_LlqV6t4rglMAI bNOx3Wgl24m9GoljaM1X" aria-label="Sidebar">
  <div class="YRrCJSr_j5nopfm4duUc ahOqFrhzLjivRe8a1kX_ e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe Yr1oeNFASSARgkvkNsPa qG4UENFSlNnopb6lM8a8 _Ybd3WwuTVljUT4vEaM3 hEIh0_vxSXD_ZBXYxnd0 qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
    <div class="YRrCJSr_j5nopfm4duUc _lTTGxW9MVI40FyDCtmr e8VqoQNK0mbkRFDL3LMV _74lpPUMEtHf6F0_fjLe LVS5VhNiuUNp2iESGVfr pjVv_HvtzX_QkbymyvoG">
      <div class="_74lpPUMEtHf6F0_fjLe _Cj_M6jt2eLjDgkBBNgI wezTbYJgxYJp5ZDqX67N _Ybd3WwuTVljUT4vEaM3 Zy1Pypi71Xu6guex6urN NIAblPiyeuYQ0zW671xb _1jTZ8KXRZul60S6czNi XpuPpk9eXhVCrleKmXDr">
        <ul class="hwCTzGuw3Wvg2a388A7l TVHgSaRh3muGJct_epr9">
          <li>
            <form action="#" method="GET" class="F34pkf_DAj2DlPtfAEMV">
              <label for="mobile-search" class="_DVAfiyo21kM68EUVzEQ">Search</label>
              <div class="ahOqFrhzLjivRe8a1kX_">
                <div class="YRrCJSr_j5nopfm4duUc pq2JRWtiWcwYnw3xueNl _WGbLgD5wr3m_9WZl9Ua TYmpscr1PwuC1dpYXDpM Q_jg_EPdNf9eDMn1mLI2 aa_y6SeayB9fNgBD5ROa qArZHwmmp1ULq_EXc7FF">
                  <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG PeR2JZ9BZHYIH8Ea3F36" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input type="text" name="email" id="mobile-search" class="jtAJHOc7mn7b4IKRO59D pXhVRBC8yaUNllmIWxln vpDN1VEJLu5FmLkr5WCk __9sbu0yrzdhGIkLWNXl c8dCx6gnV43hTOLV6ks5 mveJTCIb2WII7J4sY22F GdTcGtoKP5_bET3syLDl LceKfSImrGKQrtDGkpBV _Vb9igHms0hI1PQcvp_S t6gkcSf0Bt4MLItXvDJ_ phuq9OcM4E3Gy9MJy0RC olxDi3yL6f0gpdsOFDhx jqg6J89cvxmDiFpnV56r Mmx5lX7HVdrWCgh3EpTP H7KQDhgKsqZaTUouEUQL duXR6Hcu_44X_243WcOl KpCMWe32PQyrSFbZVput q6szSHqGtBufkToFe_s5" placeholder="Search">
              </div>
            </form>
          </li>
          <li>
            <a href="{{ url('/dashboard') }}" class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 d3C8uAdJKNl1jzfE9ynq _43MO1gcdi2Y0RJW1uHL __9sbu0yrzdhGIkLWNXl mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="oA7zcT_42jVeFuWTXQnq" sidebar-toggle-item="">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="https://flowbite.com/application-ui/demo/mailing/inbox/" class="d3C8uAdJKNl1jzfE9ynq __9sbu0yrzdhGIkLWNXl _43MO1gcdi2Y0RJW1uHL mveJTCIb2WII7J4sY22F _7KA5gD55t2lxf9Jkj20 YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 FJRldeiG2gFGZfuKgp88 BpcA_ZTX79XDgSc71n2v duXR6Hcu_44X_243WcOl OPrb_iG5WDy_7F05BDOX">
                <svg class="VQS2tmQ_zFyBOC2tkmto YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr PeR2JZ9BZHYIH8Ea3F36 bcsWqjK52oeyT6oeC2Az gZ3KuFw1JESHhOJhjT8j _Oyukq8JlN1X9w2FmPds XIIs8ZOri3wm8Wnj9N_y Lld6j9B1iilEqA6j31e4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="_74lpPUMEtHf6F0_fjLe oA7zcT_42jVeFuWTXQnq BHrWGjM1Iab_fAz0_91H" sidebar-toggle-item="">Inbox</span>
                <span class="_k0lTW0vvzboctTxDi2R Nm7xMnguzOx6J5Ao7yCU Q_jg_EPdNf9eDMn1mLI2 sQaK4IH7BIQSgBTGX8Pe oA7zcT_42jVeFuWTXQnq ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe RpVwy4sO7Asb86CncKJ_ mbOxN7eW74XygTKQC_r3 YccXYy5sNIz6FJlLxw0D" sidebar-toggle-item="">3</span>
            </a>
          </li>
         
    
          
         
      </div>
    </div>
    <div class="_SmdlCf6eUKB_V9S5IDj pq2JRWtiWcwYnw3xueNl VuoyqWQkm5MTiE515qz8 TYmpscr1PwuC1dpYXDpM Nm7xMnguzOx6J5Ao7yCU _wYiJGbRZyFZeCc8y7Sf d4louhNic5PFgJGRKqn6 t6gkcSf0Bt4MLItXvDJ_ _YtPVN_LlqV6t4rglMAI" sidebar-bottom-menu="">
      
    </div>
  </div>
</aside>

<div class="_SmdlCf6eUKB_V9S5IDj _LPVUrp9Uina5fcERqWC _DGThsbfFGclb6iwA4_9 QhmQ_v3mmDFIP9VaVOfb _JKsnSqP4tIzydAzf5aP yQK4azPzSPqQ3rmcKxWm" id="sidebarBackdrop"></div>
  
  <div id="main-content" class="ahOqFrhzLjivRe8a1kX_ t6gkcSf0Bt4MLItXvDJ_ uLPch_bqyJDXwe5tynMV _lTTGxW9MVI40FyDCtmr jtAJHOc7mn7b4IKRO59D zW58fVqdWJHfumftUEwF h8KYXnua2NT4kTVzieom">
    <main>
      

    <div class="_wYiJGbRZyFZeCc8y7Sf _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
      <!-- Card Title -->
      <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2 hD0sTTDgbxakubcHVW2X">
        <div>
          <h3 class="TR_P65x9ie7j6uxFo_Cs vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">RESERVAS</h3>
          
        </div>
      
      </div>
      <!-- Table -->
      <div class="YRrCJSr_j5nopfm4duUc e8VqoQNK0mbkRFDL3LMV R2oNx0cNtxO_M_VVt390">
        <div class="_IebywwKB6L2zG0BTy63 mveJTCIb2WII7J4sY22F">
          <div class="VPGGthdu3cy_ZP7AL7dt TK9h2c2b79uBgR_cJzCE u0Aizb1ol0gBXDISYKJM">
            <div class="wBVMFkIGfrKshbvi2gS1 mngKhi_Rv06PF57lblDI PTS4x_A1HVmoZYJHkYaG">
              {{$slot}}
            </div>
          </div>
        </div>
      </div>
   
       
      </div>
    </div>
</div>
    </main>
     
<p class="_doGzYmWP2_jIjPyHtlc c8dCx6gnV43hTOLV6ks5 ijrOHNoSVGATsWYKl4Id PeR2JZ9BZHYIH8Ea3F36">
<span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">Alma Beach Club | All Rights Reserved.</span>
</p>
   
  </div>

</div>



    <script src="https://flowbite.com/application-ui/demo/app.bundle.js"></script>

  
</body>


</html>
