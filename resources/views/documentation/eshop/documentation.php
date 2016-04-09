<!DOCTYPE html><html><head><meta charset="utf-8"><title>Eshop SmartNinja API</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700|Inconsolata|Raleway:200');.hljs-comment,.hljs-title{color:#8e908c}.hljs-variable,.hljs-attribute,.hljs-tag,.hljs-regexp,.ruby .hljs-constant,.xml .hljs-tag .hljs-title,.xml .hljs-pi,.xml .hljs-doctype,.html .hljs-doctype,.css .hljs-id,.css .hljs-class,.css .hljs-pseudo{color:#c82829}.hljs-number,.hljs-preprocessor,.hljs-pragma,.hljs-built_in,.hljs-literal,.hljs-params,.hljs-constant{color:#f5871f}.ruby .hljs-class .hljs-title,.css .hljs-rules .hljs-attribute{color:#eab700}.hljs-string,.hljs-value,.hljs-inheritance,.hljs-header,.ruby .hljs-symbol,.xml .hljs-cdata{color:#718c00}.css .hljs-hexcolor{color:#3e999f}.hljs-function,.python .hljs-decorator,.python .hljs-title,.ruby .hljs-function .hljs-title,.ruby .hljs-title .hljs-keyword,.perl .hljs-sub,.javascript .hljs-title,.coffeescript .hljs-title{color:#4271ae}.hljs-keyword,.javascript .hljs-function{color:#8959a8}.hljs{display:block;background:white;color:#4d4d4c;padding:.5em}.coffeescript .javascript,.javascript .xml,.tex .hljs-formula,.xml .javascript,.xml .vbscript,.xml .css,.xml .hljs-cdata{opacity:.5}.right .hljs-comment{color:#969896}.right .css .hljs-class,.right .css .hljs-id,.right .css .hljs-pseudo,.right .hljs-attribute,.right .hljs-regexp,.right .hljs-tag,.right .hljs-variable,.right .html .hljs-doctype,.right .ruby .hljs-constant,.right .xml .hljs-doctype,.right .xml .hljs-pi,.right .xml .hljs-tag .hljs-title{color:#c66}.right .hljs-built_in,.right .hljs-constant,.right .hljs-literal,.right .hljs-number,.right .hljs-params,.right .hljs-pragma,.right .hljs-preprocessor{color:#de935f}.right .css .hljs-rule .hljs-attribute,.right .ruby .hljs-class .hljs-title{color:#f0c674}.right .hljs-header,.right .hljs-inheritance,.right .hljs-name,.right .hljs-string,.right .hljs-value,.right .ruby .hljs-symbol,.right .xml .hljs-cdata{color:#b5bd68}.right .css .hljs-hexcolor,.right .hljs-title{color:#8abeb7}.right .coffeescript .hljs-title,.right .hljs-function,.right .javascript .hljs-title,.right .perl .hljs-sub,.right .python .hljs-decorator,.right .python .hljs-title,.right .ruby .hljs-function .hljs-title,.right .ruby .hljs-title .hljs-keyword{color:#81a2be}.right .hljs-keyword,.right .javascript .hljs-function{color:#b294bb}.right .hljs{display:block;overflow-x:auto;background:#1d1f21;color:#c5c8c6;padding:.5em;-webkit-text-size-adjust:none}.right .coffeescript .javascript,.right .javascript .xml,.right .tex .hljs-formula,.right .xml .css,.right .xml .hljs-cdata,.right .xml .javascript,.right .xml .vbscript{opacity:.5}.hljs-comment,.hljs-quote{color:#9e8f9e}.hljs-attribute,.hljs-link,.hljs-name,.hljs-regexp,.hljs-selector-class,.hljs-selector-id,.hljs-tag,.hljs-template-variable,.hljs-variable{color:#ca402b}.hljs-built_in,.hljs-literal,.hljs-meta,.hljs-number,.hljs-params,.hljs-type{color:#a65926}.hljs-bullet,.hljs-string,.hljs-symbol{color:#918b3b}.hljs-section,.hljs-title{color:#516aec}.hljs-keyword,.hljs-selector-tag{color:#7b59c0}.hljs{display:block;overflow-x:auto;background:#1b181b;color:#ab9bab;padding:.5em}.hljs-emphasis{font-style:italic}.hljs-strong{font-weight:700}.right .hljs-comment,.right .hljs-quote{color:#776977}.right .hljs-attribute,.right .hljs-link,.right .hljs-name,.right .hljs-regexp,.right .hljs-selector-class,.right .hljs-selector-id,.right .hljs-tag,.right .hljs-template-variable,.right .hljs-variable{color:#ca402b}.right .hljs-built_in,.right .hljs-literal,.right .hljs-meta,.right .hljs-number,.right .hljs-params,.right .hljs-type{color:#a65926}.right .hljs-bullet,.right .hljs-string,.right .hljs-symbol{color:#918b3b}.right .hljs-section,.right .hljs-title{color:#516aec}.right .hljs-keyword,.right .hljs-selector-tag{color:#7b59c0}.right .hljs{display:block;overflow-x:auto;background:#f7f3f7;color:#695d69;padding:.5em}.right .hljs-emphasis{font-style:italic}.right .hljs-strong{font-weight:700}body{color:#c8c8c8;background:#272b30;font:400 14px / 1.42 'Roboto',Helvetica,sans-serif}header{border-bottom:1px solid #373d44;margin-bottom:12px}h1,h2,h3,h4,h5{color:#c8c8c8;margin:12px 0}h1 .permalink,h2 .permalink,h3 .permalink,h4 .permalink,h5 .permalink{margin-left:0;opacity:0;transition:opacity .25s ease}h1:hover .permalink,h2:hover .permalink,h3:hover .permalink,h4:hover .permalink,h5:hover .permalink{opacity:1}.triple h1 .permalink,.triple h2 .permalink,.triple h3 .permalink,.triple h4 .permalink,.triple h5 .permalink{opacity:.15}.triple h1:hover .permalink,.triple h2:hover .permalink,.triple h3:hover .permalink,.triple h4:hover .permalink,.triple h5:hover .permalink{opacity:.15}h1{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:36px}h2{font:200 36px 'Raleway',Helvetica,sans-serif;font-size:30px}h3{font-size:100%;text-transform:uppercase}h5{font-size:100%;font-weight:normal}p{margin:0 0 10px}p.choices{line-height:1.6}a{color:white;text-decoration:none}li p{margin:0}hr.split{border:0;height:1px;width:100%;padding-left:6px;margin:12px auto;background-image:linear-gradient(to right, rgba(200,200,200,0) 20%, rgba(200,200,200,0.2) 51.4%, rgba(39,43,48,0.2) 51.4%, rgba(39,43,48,0) 80%)}dl dt{float:left;width:130px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;font-weight:700}dl dd{margin-left:150px}blockquote{color:rgba(200,200,200,0.5);font-size:15.5px;padding:10px 20px;margin:12px 0;border-left:5px solid #2b3237}blockquote p:last-child{margin-bottom:0}pre{background-color:#202529;padding:12px;border:1px solid #424c54;border-radius:6px;overflow:auto}pre code{color:#c8c8c8;background-color:transparent;padding:0;border:none}code{color:#ddd;background-color:#373b40;font:'Inconsolata',monospace;padding:1px 4px;border:1px solid #424c54;border-radius:3px}ul,ol{padding-left:2em}table{border-collapse:collapse;border-spacing:0;margin-bottom:12px}table tr:nth-child(2n){background-color:#22262a}table th,table td{padding:6px 12px;border:1px solid #101214}.text-muted{opacity:.5}.note,.warning{padding:.3em 1em;margin:1em 0;border-radius:2px;font-size:90%}.note h1,.warning h1,.note h2,.warning h2,.note h3,.warning h3,.note h4,.warning h4,.note h5,.warning h5,.note h6,.warning h6{font-family:200 36px 'Raleway',Helvetica,sans-serif;font-size:135%;font-weight:500}.note p,.warning p{margin:.5em 0}.note{color:#c8c8c8;background-color:#2b373e;border-left:4px solid #5bc0de}.note h1,.note h2,.note h3,.note h4,.note h5,.note h6{color:#5bc0de}.warning{color:#c8c8c8;background-color:#352b30;border-left:4px solid #e9322d}.warning h1,.warning h2,.warning h3,.warning h4,.warning h5,.warning h6{color:#e9322d}header{margin-top:24px}nav{position:fixed;top:24px;bottom:0;overflow-y:auto}nav .resource-group{padding:0}nav .resource-group .heading{position:relative}nav .resource-group .heading .chevron{position:absolute;top:12px;right:12px;opacity:.5}nav .resource-group .heading a{display:block;color:#c8c8c8;opacity:.7;border-left:2px solid transparent;margin:0}nav .resource-group .heading a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid #c8c8c8}nav ul{list-style-type:none;padding-left:0}nav ul a{display:block;font-size:13px;color:rgba(200,200,200,0.7);padding:8px 12px;border-top:1px solid #202020;border-left:2px solid transparent;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}nav ul a:hover{text-decoration:none;background-color:bad-color;border-left:2px solid #c8c8c8}nav ul>li{margin:0}nav ul>li:first-child{margin-top:-12px}nav ul>li:last-child{margin-bottom:-12px}nav ul ul a{padding-left:24px}nav ul ul li{margin:0}nav ul ul li:first-child{margin-top:0}nav ul ul li:last-child{margin-bottom:0}nav>div>div>ul>li:first-child>a{border-top:none}.preload *{transition:none !important}.pull-left{float:left}.pull-right{float:right}.badge{display:inline-block;float:right;min-width:10px;min-height:14px;padding:3px 7px;font-size:12px;color:#fff;background-color:#373d44;border-radius:10px;margin:-2px 0}.badge.get{color:white;background-color:#5bc0de}.badge.head{color:white;background-color:#5bc0de}.badge.options{color:white;background-color:#5bc0de}.badge.put{color:white;background-color:#f89406}.badge.patch{color:white;background-color:#f89406}.badge.post{color:white;background-color:#62c462}.badge.delete{color:white;background-color:#ee5f5b}.collapse-button{float:right}.collapse-button .close{display:none;color:white;cursor:pointer}.collapse-button .open{color:white;cursor:pointer}.collapse-button.show .close{display:inline}.collapse-button.show .open{display:none}.collapse-content{max-height:0;overflow:hidden;transition:max-height .3s ease-in-out}nav{width:220px}.container{max-width:940px;margin-left:auto;margin-right:auto}.container .row .content{margin-left:244px;width:696px}.container .row:after{content:'';display:block;clear:both}.container-fluid nav{width:22%}.container-fluid .row .content{margin-left:24%}.container-fluid.triple nav{width:16.5%;padding-right:1px}.container-fluid.triple .row .content{position:relative;margin-left:16.5%;padding-left:24px}.middle:before,.middle:after{content:'';display:table}.middle:after{clear:both}.middle{box-sizing:border-box;width:51.5%;padding-right:12px}.right{box-sizing:border-box;float:right;width:48.5%;padding-left:12px}.right a{color:#666}.right h1,.right h2,.right h3,.right h4,.right h5,.right p,.right div{color:#272b30}.right pre{background-color:#f7f6f5;border:1px solid #f7f6f5}.right pre code{color:#333}.right .description{margin-top:12px}.triple .resource-heading{font-size:125%}.definition{margin-top:12px;margin-bottom:12px}.definition .method{font-weight:bold}.definition .method.get{color:#2e98b8}.definition .method.head{color:#2e98b8}.definition .method.options{color:#2e98b8}.definition .method.post{color:#2eb82e}.definition .method.put{color:#b87f2e}.definition .method.patch{color:#b87f2e}.definition .method.delete{color:#b8322e}.definition .uri{word-break:break-all;word-wrap:break-word}.definition .hostname{opacity:.5}.example-names{background-color:#eee;padding:12px;border-radius:6px}.example-names .tab-button{cursor:pointer;color:#c8c8c8;border:1px solid #ddd;padding:6px;margin-left:12px}.example-names .tab-button.active{background-color:#d5d5d5}.right .example-names{background-color:#adaaa6}.right .example-names .tab-button{color:#272b30;border:1px solid #d8d4cf;border-radius:6px}.right .example-names .tab-button.active{background-color:#95918b}#nav-background{position:fixed;left:0;top:0;bottom:0;width:16.5%;padding-right:14.4px;background-color:#272b30;border-right:1px solid #272b30;z-index:-1}#right-panel-background{position:absolute;right:-12px;top:-12px;bottom:-12px;width:48.6%;background-color:#d8d4cf;z-index:-1}@media (max-width:1200px){nav{width:198px}.container{max-width:840px}.container .row .content{margin-left:224px;width:606px}}@media (max-width:992px){nav{width:169.4px}.container{max-width:720px}.container .row .content{margin-left:194px;width:526px}}@media (max-width:768px){nav{display:none}.container{width:95%;max-width:none}.container .row .content,.container-fluid .row .content,.container-fluid.triple .row .content{margin-left:auto;margin-right:auto;width:95%}#nav-background{display:none}#right-panel-background{width:48.6%}}.back-to-top{position:fixed;z-index:1;bottom:0;right:24px;padding:4px 8px;color:rgba(200,200,200,0.5);background-color:#373d44;text-decoration:none !important;border-top:1px solid #202020;border-left:1px solid #202020;border-right:1px solid #202020;border-top-left-radius:3px;border-top-right-radius:3px}.resource-group{padding:12px;margin-bottom:12px;background-color:#272b30;border:1px solid #202020;border-radius:6px}.resource-group h2.group-heading,.resource-group .heading a{padding:12px;margin:-12px -12px 12px -12px;background-color:#373d44;border-bottom:1px solid #202020;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.triple .content .resource-group{padding:0;border:none}.triple .content .resource-group h2.group-heading,.triple .content .resource-group .heading a{margin:0 0 12px 0;border:1px solid #202020}nav .resource-group .heading a{padding:12px;margin-bottom:0}nav .resource-group .collapse-content{padding:0}.action{margin-bottom:12px;padding:12px 12px 0 12px;overflow:hidden;border:1px solid transparent;border-radius:6px}.action h4.action-heading{padding:12px;margin:-12px -12px 12px -12px;border-bottom:1px solid transparent;border-top-left-radius:6px;border-top-right-radius:6px;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}.action h4.action-heading .name{float:right;font-weight:normal}.action h4.action-heading .method{padding:6px 12px;margin-right:12px;border-radius:3px}.action h4.action-heading .method.get{color:#fff;background-color:#2390b0}.action h4.action-heading .method.head{color:#fff;background-color:#2390b0}.action h4.action-heading .method.options{color:#fff;background-color:#2390b0}.action h4.action-heading .method.put{color:#fff;background-color:#945904}.action h4.action-heading .method.patch{color:#fff;background-color:#945904}.action h4.action-heading .method.post{color:#fff;background-color:#348c34}.action h4.action-heading .method.delete{color:#fff;background-color:#ce1a15}.action h4.action-heading code{color:black;background-color:rgba(255,255,255,0.7);border-color:transparent;font-weight:normal}.action dl.inner{padding-bottom:2px}.action .title{border-bottom:1px solid #272b30;margin:0 -12px -1px -12px;padding:12px}.action.get{border-color:#202020}.action.get h4.action-heading{color:#2390b0;background:#5bc0de;border-bottom-color:#202020}.action.head{border-color:#202020}.action.head h4.action-heading{color:#2390b0;background:#5bc0de;border-bottom-color:#202020}.action.options{border-color:#202020}.action.options h4.action-heading{color:#2390b0;background:#5bc0de;border-bottom-color:#202020}.action.post{border-color:#202020}.action.post h4.action-heading{color:#348c34;background:#62c462;border-bottom-color:#202020}.action.put{border-color:#202020}.action.put h4.action-heading{color:#945904;background:#f89406;border-bottom-color:#202020}.action.patch{border-color:#202020}.action.patch h4.action-heading{color:#945904;background:#f89406;border-bottom-color:#202020}.action.delete{border-color:#202020}.action.delete h4.action-heading{color:#ce1a15;background:#ee5f5b;border-bottom-color:#202020}</style></head><body class="preload"><a href="#top" class="text-muted back-to-top"><i class="fa fa-toggle-up"></i>&nbsp;Back to top</a><div class="container"><div class="row"><nav><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#categories">Categories</a></div><div class="collapse-content"><ul><li><a href="#categories-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get a list of categories</a></li><li><a href="#categories-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get a list of products for a category</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#products">Products</a></div><div class="collapse-content"><ul><li><a href="#products-get"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get a list of products</a></li><li><a href="#products-get-1"><span class="badge get"><i class="fa fa-arrow-down"></i></span>Get information about a specific product</a></li></ul></div></div><div class="resource-group"><div class="heading"><div class="chevron"><i class="open fa fa-angle-down"></i></div><a href="#orders">Orders</a></div><div class="collapse-content"><ul><li><a href="#orders-post"><span class="badge post"><i class="fa fa-plus"></i></span>Create a new order</a></li></ul></div></div></nav><div class="content"><header><h1 id="top">Eshop SmartNinja API</h1></header><p>A simple API for retrieving data about products. This API is meant for SmartNinja students.</p>
<section id="categories" class="resource-group"><h2 class="group-heading">Categories <a href="#categories" class="permalink">&para;</a></h2><p>Instructions for using the API to retrieve information about categories.</p>
<div id="categories-" class="resource"><h3 class="resource-heading">Get a list of categories <a href="#categories-" class="permalink">&nbsp;&para;</a></h3><div id="categories-get" class="action get"><h4 class="action-heading"><div class="name">Get a list of categories</div><a href="#categories-get" class="method get">GET</a><code class="uri">/api/eshop/categories</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/api/eshop/categories</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[
    {
        id: <span class="hljs-number">1</span>,
        category: <span class="hljs-string">"Big toys"</span>
    },
    {
        id: <span class="hljs-number">2</span>,
        category: <span class="hljs-string">"Medium toys"</span>
    },
    {
        id: <span class="hljs-number">3</span>,
        category: <span class="hljs-string">"Small toys"</span>
    },
    {
        id: <span class="hljs-number">4</span>,
        category: <span class="hljs-string">"Games"</span>
    }
]</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="categories--1" class="resource"><h3 class="resource-heading">Get a list of products for a category <a href="#categories--1" class="permalink">&nbsp;&para;</a></h3><div id="categories-get-1" class="action get"><h4 class="action-heading"><div class="name">Get a list of products for a category</div><a href="#categories-get-1" class="method get">GET</a><code class="uri">/api/eshop/categories/products</code></h4><ul>
<li>
<p>query (string, optional) - filter by name</p>
</li>
<li>
<p>onlyStocked (boolean, optional) - filter by stocked products</p>
<ul>
<li>default: false</li>
</ul>
</li>
<li>
<p>onlyOnSale (boolean, optional) - filter by products on sale</p>
<ul>
<li>default: false</li>
</ul>
</li>
</ul>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/api/eshop/categories/products</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[
    {
        id: <span class="hljs-number">1</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Monty"</span>,
        color: <span class="hljs-string">"aqua"</span>,
        tagline: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
        description: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
        brand: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
        price: <span class="hljs-number">49.99</span>,
        stock: <span class="hljs-number">2</span>,
        availableOn: <span class="hljs-literal">null</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
        onSale: <span class="hljs-literal">false</span>
    },
    {
        id: <span class="hljs-number">2</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Jackeline"</span>,
        color: <span class="hljs-string">"yellow"</span>,
        tagline: <span class="hljs-string">"Saepe architecto unde non dicta eveniet."</span>,
        description: <span class="hljs-string">"Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut."</span>,
        brand: <span class="hljs-string">"Kling Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">0</span>,
        availableOn: <span class="hljs-string">"16.05.2015"</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/transport/2"</span>,
        onSale: <span class="hljs-literal">true</span>
    },
    {
        id: <span class="hljs-number">5</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Kamryn"</span>,
        color: <span class="hljs-string">"blue"</span>,
        tagline: <span class="hljs-string">"Laudantium perferendis eveniet quam vero fuga."</span>,
        description: <span class="hljs-string">"Temporibus maxime sint suscipit laudantium quod magni. Voluptas fuga non autem non non explicabo et neque. Ex quaerat ut aut at consequatur non rerum in. Voluptas molestiae fuga quod cum non qui. Cupiditate incidunt id sunt dolorem. Voluptatem perferendis molestiae est. Iure possimus ab in hic. Odio sed vitae maiores ex beatae reprehenderit exercitationem corrupti."</span>,
        brand: <span class="hljs-string">"Hudson Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">3</span>,
        availableOn: <span class="hljs-literal">null</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/technics/5"</span>,
        onSale: <span class="hljs-literal">false</span>
    }
]</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="products" class="resource-group"><h2 class="group-heading">Products <a href="#products" class="permalink">&para;</a></h2><p>Instructions for retrieving information about products.</p>
<div id="products-" class="resource"><h3 class="resource-heading">Get a list of products <a href="#products-" class="permalink">&nbsp;&para;</a></h3><div id="products-get" class="action get"><h4 class="action-heading"><div class="name">Get a list of products</div><a href="#products-get" class="method get">GET</a><code class="uri">/api/eshop/products</code></h4><ul>
<li>
<p>query (string, optional) - filter by name</p>
</li>
<li>
<p>onlyStocked (boolean, optional) - filter by stocked products</p>
<ul>
<li>default: false</li>
</ul>
</li>
<li>
<p>onlyOnSale (boolean, optional) - filter by products on sale</p>
<ul>
<li>default: false</li>
</ul>
</li>
</ul>
<h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/api/eshop/products</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>[
    {
        id: <span class="hljs-number">1</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Monty"</span>,
        color: <span class="hljs-string">"aqua"</span>,
        tagline: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
        description: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
        brand: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
        price: <span class="hljs-number">49.99</span>,
        stock: <span class="hljs-number">2</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
        onSale: <span class="hljs-literal">false</span>,
        availableOn: <span class="hljs-literal">null</span>
    },
    {
        id: <span class="hljs-number">2</span>,
        categoryId: <span class="hljs-number">3</span>,
        name: <span class="hljs-string">"Jackeline"</span>,
        color: <span class="hljs-string">"yellow"</span>,
        tagline: <span class="hljs-string">"Saepe architecto unde non dicta eveniet."</span>,
        description: <span class="hljs-string">"Porro sed magni cupiditate sit. Voluptas sint non voluptates. Optio quos qui illo error. Laborum vero a officia id corporis. Saepe provident esse hic eligendi. Culpa ut ab voluptas sed a. Et sint autem inventore aut officia aut."</span>,
        brand: <span class="hljs-string">"Kling Ltd"</span>,
        price: <span class="hljs-number">19.99</span>,
        stock: <span class="hljs-number">0</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/transport/2"</span>,
        onSale: <span class="hljs-literal">true</span>,
        availableOn: <span class="hljs-string">"2015-05-16"</span>
    },
    {
        id: <span class="hljs-number">3</span>,
        categoryId: <span class="hljs-number">1</span>,
        name: <span class="hljs-string">"Lina"</span>,
        color: <span class="hljs-string">"blue"</span>,
        tagline: <span class="hljs-string">"Nisi molestiae quidem ut sunt et quidem est accusamus."</span>,
        description: <span class="hljs-string">"Fuga est placeat rerum ut et. Ex eveniet facere sunt quia. Aut nam et eum architecto fugit repellendus illo veritatis. Ex esse veritatis voluptate vel possimus. Aut incidunt sunt cumque asperiores incidunt iure sequi. Culpa rem aut rerum exercitationem est rem. Voluptas fuga totam reiciendis. Architecto fugiat nemo omnis consequatur recusandae qui cupiditate. Quod veritatis vel optio provident. Incidunt magnam molestias et quibusdam et ab quo voluptatum. Ipsum voluptatibus est accusantium eveniet."</span>,
        brand: <span class="hljs-string">"Kub, Roob and Brakus"</span>,
        price: <span class="hljs-number">9.99</span>,
        stock: <span class="hljs-number">2</span>,
        image: <span class="hljs-string">"http://lorempixel.com/300/300/animals/3"</span>,
        onSale: <span class="hljs-literal">false</span>,
        availableOn: <span class="hljs-literal">null</span>
    }
]</code></pre><div style="height: 1px;"></div></div></div></div></div><div id="products--1" class="resource"><h3 class="resource-heading">Get information about a specific product <a href="#products--1" class="permalink">&nbsp;&para;</a></h3><div id="products-get-1" class="action get"><h4 class="action-heading"><div class="name">Get information about a specific product</div><a href="#products-get-1" class="method get">GET</a><code class="uri">/api/eshop/products</code></h4><h4>Example URI</h4><div class="definition"><span class="method get">GET</span>&nbsp;<span class="uri"><span class="hostname"></span>/api/eshop/products</span></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Headers</h5><pre><code><span class="hljs-attribute">Content-Type</span>: <span class="hljs-string">application/json</span></code></pre><div style="height: 1px;"></div><h5>Body</h5><pre><code>{
    id: <span class="hljs-number">1</span>,
    categoryId: <span class="hljs-number">3</span>,
    name: <span class="hljs-string">"Monty"</span>,
    color: <span class="hljs-string">"aqua"</span>,
    tagline: <span class="hljs-string">"Accusamus nihil repellat vero omnis voluptates id amet et et."</span>,
    description: <span class="hljs-string">"Recusandae totam nulla quam ipsam voluptatem. Sed natus debitis voluptas aut laudantium sit. Esse perspiciatis dignissimos error et itaque quibusdam tempora velit. Ut velit soluta explicabo eligendi occaecati debitis et. Eum sint dolorem delectus enim ipsum inventore sed. Et velit qui suscipit a deserunt laudantium. Enim nostrum soluta qui ipsam non ipsum velit."</span>,
    brand: <span class="hljs-string">"Barton, Flatley and Muller"</span>,
    price: <span class="hljs-number">49.99</span>,
    stock: <span class="hljs-number">2</span>,
    image: <span class="hljs-string">"http://lorempixel.com/300/300/people/1"</span>,
    onSale: <span class="hljs-literal">false</span>,
    availableOn: <span class="hljs-literal">null</span>
}</code></pre><div style="height: 1px;"></div></div></div></div></div></section><section id="orders" class="resource-group"><h2 class="group-heading">Orders <a href="#orders" class="permalink">&para;</a></h2><div id="orders-" class="resource"><h3 class="resource-heading">Create a new order <a href="#orders-" class="permalink">&nbsp;&para;</a></h3><p>When creating a new order you have to supply cart and user information.</p>
<div id="orders-post" class="action post"><h4 class="action-heading"><div class="name">Create a new order</div><a href="#orders-post" class="method post">POST</a><code class="uri">/api/eshop/orders</code></h4><h4>Example URI</h4><div class="definition"><span class="method post">POST</span>&nbsp;<span class="uri"><span class="hostname"></span>/api/eshop/orders</span></div><div class="title"><strong>Request&nbsp;&nbsp;<code>JSON message</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">firstName</span>": <span class="hljs-value"><span class="hljs-string">"John"</span></span>,
  "<span class="hljs-attribute">lastName</span>": <span class="hljs-value"><span class="hljs-string">"Example"</span></span>,
  "<span class="hljs-attribute">email</span>": <span class="hljs-value"><span class="hljs-string">"john@example.com"</span></span>,
  "<span class="hljs-attribute">address</span>": <span class="hljs-value"><span class="hljs-string">"One way 123"</span></span>,
  "<span class="hljs-attribute">country</span>": <span class="hljs-value"><span class="hljs-string">"Freelandia"</span></span>,
  "<span class="hljs-attribute">city</span>": <span class="hljs-value"><span class="hljs-string">"York"</span></span>,
  "<span class="hljs-attribute">zip</span>": <span class="hljs-value"><span class="hljs-number">43533</span></span>,
  "<span class="hljs-attribute">products</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">id</span>": <span class="hljs-value"><span class="hljs-number">1</span></span>,
      "<span class="hljs-attribute">quantity</span>": <span class="hljs-value"><span class="hljs-number">1</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>200</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">status</span>": <span class="hljs-value"><span class="hljs-string">"success"</span>
</span>}</code></pre><div style="height: 1px;"></div></div></div><div class="title"><strong>Response&nbsp;&nbsp;<code>400</code></strong><div class="collapse-button"><span class="close">Hide</span><span class="open">Show</span></div></div><div class="collapse-content"><div class="inner"><h5>Body</h5><pre><code>{
  "<span class="hljs-attribute">errors</span>": <span class="hljs-value">[
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"email"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid email is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"products"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"You need at least one product."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"firstName"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid first name is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"lastName"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid last name is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"address"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid address is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"country"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid country is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"city"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid city is required."</span>
    </span>},
    {
      "<span class="hljs-attribute">type</span>": <span class="hljs-value"><span class="hljs-string">"zip"</span></span>,
      "<span class="hljs-attribute">message</span>": <span class="hljs-value"><span class="hljs-string">"A valid zip is required."</span>
    </span>}
  ]
</span>}</code></pre><div style="height: 1px;"></div></div></div></div></div></section></div></div></div><p style="text-align: center;" class="text-muted">Generated by&nbsp;<a href="https://github.com/danielgtaylor/aglio" class="aglio">aglio</a>&nbsp;on 09 Apr 2016</p><script>/* eslint-env browser */
/* eslint quotes: [2, "single"] */
'use strict';

/*
  Determine if a string ends with another string.
*/
function endsWith(str, suffix) {
    return str.indexOf(suffix, str.length - suffix.length) !== -1;
}

/*
  Get a list of direct child elements by class name.
*/
function childrenByClass(element, name) {
  var filtered = [];

  for (var i = 0; i < element.children.length; i++) {
    var child = element.children[i];
    var classNames = child.className.split(' ');
    if (classNames.indexOf(name) !== -1) {
      filtered.push(child);
    }
  }

  return filtered;
}

/*
  Get an array [width, height] of the window.
*/
function getWindowDimensions() {
  var w = window,
      d = document,
      e = d.documentElement,
      g = d.body,
      x = w.innerWidth || e.clientWidth || g.clientWidth,
      y = w.innerHeight || e.clientHeight || g.clientHeight;

  return [x, y];
}

/*
  Collapse or show a request/response example.
*/
function toggleCollapseButton(event) {
    var button = event.target.parentNode;
    var content = button.parentNode.nextSibling;
    var inner = content.children[0];

    if (button.className.indexOf('collapse-button') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        // Currently showing, so let's hide it
        button.className = 'collapse-button';
        content.style.maxHeight = '0px';
    } else {
        // Currently hidden, so let's show it
        button.className = 'collapse-button show';
        content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

function toggleTabButton(event) {
    var i, index;
    var button = event.target;

    // Get index of the current button.
    var buttons = childrenByClass(button.parentNode, 'tab-button');
    for (i = 0; i < buttons.length; i++) {
        if (buttons[i] === button) {
            index = i;
            button.className = 'tab-button active';
        } else {
            buttons[i].className = 'tab-button';
        }
    }

    // Hide other tabs and show this one.
    var tabs = childrenByClass(button.parentNode.parentNode, 'tab');
    for (i = 0; i < tabs.length; i++) {
        if (i === index) {
            tabs[i].style.display = 'block';
        } else {
            tabs[i].style.display = 'none';
        }
    }
}

/*
  Collapse or show a navigation menu. It will not be hidden unless it
  is currently selected or `force` has been passed.
*/
function toggleCollapseNav(event, force) {
    var heading = event.target.parentNode;
    var content = heading.nextSibling;
    var inner = content.children[0];

    if (heading.className.indexOf('heading') === -1) {
      // Clicked without hitting the right element?
      return;
    }

    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      // Currently showing, so let's hide it, but only if this nav item
      // is already selected. This prevents newly selected items from
      // collapsing in an annoying fashion.
      if (force || window.location.hash && endsWith(event.target.href, window.location.hash)) {
        content.style.maxHeight = '0px';
      }
    } else {
      // Currently hidden, so let's show it
      content.style.maxHeight = inner.offsetHeight + 12 + 'px';
    }
}

/*
  Refresh the page after a live update from the server. This only
  works in live preview mode (using the `--server` parameter).
*/
function refresh(body) {
    document.querySelector('body').className = 'preload';
    document.body.innerHTML = body;

    // Re-initialize the page
    init();
    autoCollapse();

    document.querySelector('body').className = '';
}

/*
  Determine which navigation items should be auto-collapsed to show as many
  as possible on the screen, based on the current window height. This also
  collapses them.
*/
function autoCollapse() {
  var windowHeight = getWindowDimensions()[1];
  var itemsHeight = 64; /* Account for some padding */
  var itemsArray = Array.prototype.slice.call(
    document.querySelectorAll('nav .resource-group .heading'));

  // Get the total height of the navigation items
  itemsArray.forEach(function (item) {
    itemsHeight += item.parentNode.offsetHeight;
  });

  // Should we auto-collapse any nav items? Try to find the smallest item
  // that can be collapsed to show all items on the screen. If not possible,
  // then collapse the largest item and do it again. First, sort the items
  // by height from smallest to largest.
  var sortedItems = itemsArray.sort(function (a, b) {
    return a.parentNode.offsetHeight - b.parentNode.offsetHeight;
  });

  while (sortedItems.length && itemsHeight > windowHeight) {
    for (var i = 0; i < sortedItems.length; i++) {
      // Will collapsing this item help?
      var itemHeight = sortedItems[i].nextSibling.offsetHeight;
      if ((itemsHeight - itemHeight <= windowHeight) || i === sortedItems.length - 1) {
        // It will, so let's collapse it, remove its content height from
        // our total and then remove it from our list of candidates
        // that can be collapsed.
        itemsHeight -= itemHeight;
        toggleCollapseNav({target: sortedItems[i].children[0]}, true);
        sortedItems.splice(i, 1);
        break;
      }
    }
  }
}

/*
  Initialize the interactive functionality of the page.
*/
function init() {
    var i, j;

    // Make collapse buttons clickable
    var buttons = document.querySelectorAll('.collapse-button');
    for (i = 0; i < buttons.length; i++) {
        buttons[i].onclick = toggleCollapseButton;

        // Show by default? Then toggle now.
        if (buttons[i].className.indexOf('show') !== -1) {
            toggleCollapseButton({target: buttons[i].children[0]});
        }
    }

    var responseCodes = document.querySelectorAll('.example-names');
    for (i = 0; i < responseCodes.length; i++) {
        var tabButtons = childrenByClass(responseCodes[i], 'tab-button');
        for (j = 0; j < tabButtons.length; j++) {
            tabButtons[j].onclick = toggleTabButton;

            // Show by default?
            if (j === 0) {
                toggleTabButton({target: tabButtons[j]});
            }
        }
    }

    // Make nav items clickable to collapse/expand their content.
    var navItems = document.querySelectorAll('nav .resource-group .heading');
    for (i = 0; i < navItems.length; i++) {
        navItems[i].onclick = toggleCollapseNav;

        // Show all by default
        toggleCollapseNav({target: navItems[i].children[0]});
    }
}

// Initial call to set up buttons
init();

window.onload = function () {
    autoCollapse();
    // Remove the `preload` class to enable animations
    document.querySelector('body').className = '';
};
</script></body></html>