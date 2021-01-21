<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Page Body Start-->
<div class="page-body-wrapper horizontal-menu">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
      <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="res/assets/images/logo/logo.png" alt=""></a></div>
      <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="res/assets/images/logo/logo-icon.png" alt=""></a></div>
      <nav>
        <div class="sidebar-main">
          <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
              <li class="back-btn">
                <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
              </li>
              <li class="sidebar-list"><a class="nav-link sidebar-title" href="../theme/index.html" target="_blank"><i data-feather="home"></i><span>Dashboard</span></a></li>
              <li class="sidebar-list"><a class="nav-link sidebar-title" href="#"><i data-feather="anchor"></i><span>Starter kit</span></a>
                <ul class="sidebar-submenu">
                  <li><a class="submenu-title" href="#">color version<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                    <ul class="nav-sub-childmenu submenu-content">
                      <li><a href="index.html">Layout Light</a></li>
                      <li><a href="layout-dark.html">Layout Dark</a></li>
                    </ul>
                  </li>
                  <li>     <a class="submenu-title" href="#">Page layout<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                    <ul class="nav-sub-childmenu submenu-content">
                      <li><a href="boxed.html">Boxed</a></li>
                      <li><a href="layout-rtl.html">RTL</a></li>
                    </ul>
                  </li>
                  <li><a class="submenu-title" href="hide-on-scroll.html"><span>Hide menu on Scroll</span></a></li>
                  <li>     <a class="submenu-title" href="#">Footers<span class="sub-arrow"><i class="fa fa-chevron-right"></i></span></a>
                    <ul class="nav-sub-childmenu submenu-content">
                      <li><a href="footer-light.html">Footer Light</a></li>
                      <li><a href="footer-dark.html">Footer Dark</a></li>
                      <li><a href="footer-fixed.html">Footer Fixed</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="sidebar-list"><a class="nav-link sidebar-title" href="http://support.pixelstrap.com/help-center" target="_blank"><i data-feather="headphones"></i><span>Raise Support</span></a></li>
              <li class="sidebar-list"><a class="nav-link sidebar-title" href="../document/index.html" target="_blank"><i data-feather="file-text"></i><span>Documentation                                    </span></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- Page Sidebar Ends-->
    <div class="page-body">
      <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-lg-6">
              <h3>Layout Light</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../ltr/index.html">Home</a></li>
                <li class="breadcrumb-item">Color Version</li>
              </ol>
            </div>
            <div class="col-lg-6">
              <!-- Bookmark Start-->
              <div class="bookmark pull-right">
                <ul>
                  <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                  <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                  <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                  <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                    <form class="form-inline search-form" action="#" method="get">
                      <div class="form-group form-control-search">
                        <div class="Typeahead Typeahead--twitterUsers">
                          <div class="u-posRelative">
                            <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search.." name="q" title="" autofocus>
                            <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div>
                          </div>
                          <div class="Typeahead-menu"></div>
                          <script id="result-template" type="text/x-handlebars-template">
                            <div class="ProfileCard u-cf">                        
                            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                            <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">{{name}}</div>
                            </div>
                            </div>
                          </script>
                          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
              <!-- Bookmark Ends-->
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row starter-main">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Kick start your project development !</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li><i class="fa fa-spin fa-cog"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <p>Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !</p>
                <ul>
                  <li>
                    <p>Cuba Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.</p>
                  </li>
                  <li>
                    <p>Every components in Cuba Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.</p>
                  </li>
                  <li>
                    <p>It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.</p>
                  </li>
                </ul>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Getting start with your project custom requirements using a ready template which is quite difficult and time taking process, Cuba Admin provides useful features to kick start your project development with no efforts !&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Cuba Admin provides you getting start pages with different layouts, use the layout as per your custom requirements and just change the branding, menu & content.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Every components in Cuba Admin are decoupled, it means use only components you actually need! Remove unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;It use PUG as template engine to generate pages and whole template quickly using node js. Save your time for doing the common changes for each page (i.e menu, branding and footer) by generating template with pug.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>What is starter kit ?</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li><i class="fa fa-spin fa-cog"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <p>Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time.</p>
                <ul>
                  <li>
                    <p>Each layout includes basic components only.</p>
                  </li>
                  <li>
                    <p>Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.</p>
                  </li>
                  <li>
                    <p>Using template engine to generate whole template quickly with your selected layout and other custom changes. </p>
                  </li>
                </ul>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;Starter kit is a set of pages with different layouts, useful for your next project to start development process from scratch with no time. &lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;p&gt;Each layout includes basic components only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Select your choice of layout from starter kit, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;&lt;/li&gt;
&lt;li&gt;&lt;p&gt;Using template engine to generate whole template quickly with your selected layout and other custom changes.&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>How to use starter kit ?</h5>
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li><i class="fa fa-spin fa-cog"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <p><span class="f-w-600">HTML</span></p>
                <p>If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.</p>
                <p><span class="f-w-600">PUG</span></p>
                <p>To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.</p>
                <div class="alert alert-primary inverse" role="alert"><i class="icon-info-alt"></i>
                  <h5>Tips!</h5>
                  <p>Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.</p>
                </div>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;HTML&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;If you know just HTML, select your choice of layout from starter kit folder, customize it with optional changes like colors and branding, add required dependency only.&lt;/p&gt;
&lt;p&gt;&lt;span class="f-w-600"&gt;PUG&lt;/span&gt;&lt;/p&gt;
&lt;p&gt;To use PUG it required node.js and basic knowledge of using it. Using PUG as template engine to generate whole template quickly with your selected layout and other custom changes. To getting start with PUG usage & template generating process please refer template documentation.&lt;/p&gt;
&lt;div class="alert alert-primary inverse" role="alert"&gt;
&lt;i class="icon-info-alt"&gt;&lt;/i&gt;
&lt;h5&gt;Tips!&lt;/h5&gt;
&lt;p&gt;Hideable navbar option is available for fixed navbar with static navigation only. Works in top and bottom positions, single and multiple navbars.&lt;/p&gt;
&lt;/div&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h5>Simple Card</h5>
              </div>
              <div class="card-body">
                <h6>HTML Ipsum Presents</h6>
                <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
                                                      semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean
                                                      fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
                </p>
                <h6>Header Level 2</h6>
                <ol>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Aliquam tincidunt mauris eu risus.</li>
                </ol>
                <blockquote>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                    tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                  </p>
                </blockquote>
                <h4>Header Level<span class="digits"> 3</span></h4>
                <ul>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Aliquam tincidunt mauris eu risus.</li>
                </ul>
                <pre>#header h1 a {
display: block;
width: 300px;
height: 80px;
}</pre>
                <dl>
                  <dt>Definition list</dt>
                  <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                  <dt>Lorem ipsum dolor sit amet</dt>
                  <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
                </dl>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5>With Header</h5>
              </div>
              <div class="card-body">
                <h5>Content title</h5>
                <p>Add a heading to card with <code>.card-header</code> class</p>
                <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                <p>Jelly beans sugar plum cheesecake cookie oat cake soufflé. Tart lollipop carrot cake sugar plum. Marshmallow wafer tiramisu jelly beans.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-header card-no-border">
                <h5>With Header & No Border</h5>
              </div>
              <div class="card-body">
                <h5>Content title</h5>
                <p>Add a heading to card with <code>.card-header </code> class & without header border<code>.border-bottom-0</code> class.</p>
                <p>You may also include any &lt;h1&gt;-&lt;h6&gt; with a <code>.card-header </code> & <code>.card-title</code> class to add heading.</p>
                <p>Gingerbread brownie sweet roll cheesecake chocolate cake jelly beans marzipan gummies dessert. Jelly beans sugar plum cheesecake cookie oat cake soufflé.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid Ends-->
    </div>