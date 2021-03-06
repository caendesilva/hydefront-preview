@extends('hyde::layouts.app')
@section('content')
@php($title = "HydeFront Preview")

@push('meta')
<!-- DISALLOW ROBOTS TO INDEX STAGING SITE -->
<meta name="robots" content="noindex">
@endpush

<hr>
<mark>About this site</mark>
<main class="mx-auto max-w-7xl py-16 px-8">
    <h1 class="text-center text-3xl font-bold mb-8">HydeFront Preview</h1>
    <p class="text-center">
        Test file to preview a HydeFront version. Below are sections of various Hyde layouts,
        merged into a single page.
    </p>
</main>
<hr><mark>Latest posts homepage</mark>
<main id="content" class="mx-auto max-w-7xl py-12 px-8">
    <header class="lg:mb-12 xl:mb-16">
        <h1
            class="text-3xl text-left leading-10 tracking-tight font-extrabold sm:leading-none mb-8 md:mb-12 md:text-4xl md:text-center lg:text-5xl text-gray-700 dark:text-gray-200">
            Latest Posts</h1>
    </header>

    <div class="max-w-3xl mx-auto">
        @foreach(Hyde::getLatestPosts() as $post)
        @include('hyde::components.article-excerpt')
        @endforeach
    </div>
</main>
<hr><mark>Markdown page (using the readme as source)</mark>
<main id="content" class="mx-auto max-w-7xl py-16 px-8">
    <article class="mx-auto prose dark:prose-invert max-w-5xl">
        <h1>HydePHP - Elegant and Powerful Static App Builder</h1>
        <p>
            <a href="https://packagist.org/packages/hyde/framework"><img style="display: inline; margin: 4px 2px;"
                    src="https://img.shields.io/packagist/v/hyde/framework?include_prereleases"
                    alt="Latest Version on Packagist"></a>
            <a href="https://packagist.org/packages/hyde/framework"><img style="display: inline; margin: 4px 2px;"
                    src="https://img.shields.io/packagist/dt/hyde/framework" alt="Total Downloads on Packagist"></a>
            <a href="https://github.com/hydephp/hyde/blob/master/LICENSE.md"> <img
                    style="display: inline; margin: 4px 2px;" src="https://img.shields.io/github/license/hydephp/hyde"
                    alt="License MIT"> </a>
            <a
                href="https://cdn.desilva.se/microservices/coverbadges/badges/9b8f6a9a7a48a2df54e6751790bad8bd910015301e379f334d6ec74c4c3806d1.svg"><img
                    style="display: inline; margin: 4px 2px;"
                    src="https://cdn.desilva.se/microservices/coverbadges/badges/9b8f6a9a7a48a2df54e6751790bad8bd910015301e379f334d6ec74c4c3806d1.svg"
                    alt="Test Coverage" title="Average coverage between categories"></a>
            <img style="display: inline; margin: 4px 2px;"
                src="https://github.com/hydephp/framework/actions/workflows/test-suite.yml/badge.svg" alt="Test Suite">
            <img style="display: inline; margin: 4px 2px;"
                src="https://github.styleci.io/repos/472503421/shield?branch=master" alt="StyleCI Status">
        </p>
        <h2>Make static websites, blogs, and documentation pages with the tools you already know and love.</h2>
        <p>HydePHP is a content-first Laravel-powered Static Site Builder that allows you to create static HTML pages,
            blog posts, and documentation sites using Markdown.
            Hyde is all about letting you get started quickly while giving you the power and freedom of doing things the
            way you want to.</p>
        <p>Markdown purist? That's all you need. Blade artisan? Go for it.
            Hyde comes with hand-crafted frontend templates so you can focus on your content.
            You don't <em>need</em> to customize anything. But you <em>can</em> customize everything.</p>
        <p>See the documentation and learn more at <a
                href="https://hydephp.github.io/docs/">https://hydephp.github.io/docs/</a></p>
        <h2>Features</h2>
        <h3>Content Creation</h3>
        <ul>
            <li>Create blog posts using Markdown and Front Matter.</li>
            <li>Create documentation pages from plain Markdown, no front matter needed!</li>
            <li>Create simple pages using Markdown, or create advanced ones using Laravel Blade.</li>
            <li>You can scaffold blog posts and Markdown pages to automatically fill in the front matter.</li>
            <li>You can also scaffold Blade pages to automatically use the default layout.</li>
        </ul>
        <h3>Built-in Frontend</h3>
        <ul>
            <li>Hyde comes with a TailwindCSS starter kit so you can start making content right away.</li>
            <li>The starter kit is fully responsive, has a dark mode theme, and is customizable.</li>
            <li>The frontend is accessible to screenreaders and rich with semantic HTML and microdata.</li>
            <li>Hyde automatically chooses the right layout to use depending on the content being rendered.</li>
            <li>Hyde also fills in and creates content like navigation menus and sidebars automatically.</li>
        </ul>
        <h3>Easy Asset Managing</h3>
        <ul>
            <li>The Hyde starter comes with <a href="https://github.com/hydephp/hydefront/">HydeFront</a> to serve the
                base stylesheet and JavaScript through the jsDelivr CDN.</li>
            <li>Hyde ships with precompiled and minified TailwindCSS styles in the app.css file, you can also load them
                through the CDN.</li>
            <li>This means that all the styles you need are already installed. However, if you want to customize the
                Tailwind config, or if you add new Tailwind classes through Blade files, you can simply run the
                <code>npm run dev</code> command to recompile the styles using Laravel Mix.</li>
        </ul>
        <h3>Customization</h3>
        <ul>
            <li>You don't need to configure anything as Hyde is shipped with sensible defaults.</li>
            <li>You can, however, customize nearly everything. Here are some examples:</li>
            <li>All frontend components and page layouts are created with Blade so you
                can publish the vendor views, just like in Laravel.</li>
            <li>Override many of the dynamic content features like the menus and footer.</li>
        </ul>
        <h2>Live Demo &amp; Media</h2>
        <h3>The Hyde Website</h3>
        <p>The Hyde site (<a href="https://hydephp.github.io/">https://hydephp.github.io/</a>) is fully built with Hyde.
            That includes the homepage, the blog, and the documentation.
            You can also take a look at the <a href="https://hydephp.github.io/gallery">Gallery page</a> which was
            created using the Blade page module in Hyde and contains interactive graphics showcasing Hyde.</p>
        <h3>Demo video showcasing how to scaffold a blog post and compile it to static HTML</h3>
        <p><a href="https://www.youtube.com/watch?v=gjpE1U527h8"><img
                    src="https://user-images.githubusercontent.com/95144705/163714609-8d636acd-3538-47e9-a6f3-1923b375338b.png"
                    title="Watch on YouTube" alt="YouTube Thumbnail" width="40%"></a></p>
        <h2>Getting Started - High-level overview</h2>
        <blockquote>
            <p>See <a href="https://hydephp.github.io/docs/master/installation.html">Installation Guide</a> and <a
                    href="https://hydephp.github.io/docs/master/getting-started.html">Getting Started</a> for the full
                details.</p>
        </blockquote>
        <p>It's a breeze to get started with Hyde. Create a new Hyde project using Composer:</p>
        <pre><code class="language-bash">composer create-project hyde/hyde
</code></pre>
        <p>Next, place your Markdown files in one of the content directories: <code>_posts</code>, <code>_docs</code>,
            and <code>_pages</code> which also accepts Blade files. You can also use use the <code>hyde:make</code>
            command to scaffold them.</p>
        <p>When you're ready, run the build command to compile your static site which will save your HTML files in the
            <code>_site</code> directory.</p>
        <pre><code class="language-bash">php hyde build
</code></pre>
        <h2>??? Beta Software Warning</h2>
        <p>Heads up! HydePHP is still new and currently in beta. Please report any bugs and issues in the appropriate
            issue tracker. Versions in the 0.x series might not be stable and may change at any time. No backwards
            compatibility guarantees are made and there will be breaking changes without notice.</p>
        <p>Please wait until v1.0 for production use and remember to back up your source files before updating (use
            Git!).
            See <a
                href="https://hydephp.github.io/docs/master/updating-hyde.html">https://hydephp.github.io/docs/master/updating-hyde.html</a>
            for the upgrade guide.</p>
        <h2>Resources</h2>
        <h3>Changelog</h3>
        <p>Please see <a href="CHANGELOG.md">CHANGELOG</a> for more information on what has changed recently.</p>
        <h3>Contributing</h3>
        <p>Please see <a href="CONTRIBUTING.md">CONTRIBUTING</a> for details.</p>
        <h3>Security</h3>
        <p>If you discover any security-related issues, please email <a
                href="mailto:caen@desilva.se">caen@desilva.se</a> instead of using the issue tracker.
            All vulnerabilities will be promptly addressed.</p>
        <h3>Credits</h3>
        <ul>
            <li>
                <a href="https://github.com/caendesilva">Caen De Silva</a>
            </li>
            <li>
                <a href="../../contributors">All Contributors</a>
            </li>
        </ul>
        <h3>License</h3>
        <p>The MIT License (MIT). Please see <a href="LICENSE.md">License File</a> for more information.</p>
        <h3>Attributions</h3>
        <blockquote>
            <p>Please see the respective authors' repositories for their license files</p>
        </blockquote>
        <ul>
            <li>The Hyde core is built with <a href="https://laravel-zero.com/">Laravel Zero</a> which is based on <a
                    href="https://laravel.com/">Laravel</a>
            </li>
            <li>The frontend is built with <a href="https://tailwindcss.com/">TailwindCSS</a>.</li>
            <li>The dark mode switch is based on a component from <a
                    href="https://flowbite.com/docs/customize/dark-mode/">Flowbite</a>.</li>
        </ul>

    </article>
</main>
<hr><mark>Blog post with featured image</mark>
<main id="content" class="mx-auto max-w-7xl py-16 px-8">
    <article aria-label="Article" id="posts/my-new-post" itemscope="" itemtype="https://schema.org/Article"
        class="post-article mx-auto prose dark:prose-invert">
        <meta itemprop="identifier" content="my-new-post">

        <header aria-label="Header section" role="doc-pageheader">
            <h1 itemprop="headline" class="mb-4">Markdown with Images</h1>
            <div id="byline" aria-label="About the post" role="doc-introduction">
                Posted <time itemprop="dateCreated datePublished" datetime="2022-04-12T17:55:00+00:00"
                    title="Tuesday Apr 12th, 2022, at 5:55pm">Apr 12th, 2022</time>
                by author
                <address itemprop="author" itemscope="" itemtype="https://schema.org/Person"
                    aria-label="The post author" style="display: inline;">
                    <span itemprop="name" aria-label="The author's name" title="@Mr.+Hyde">Mr. Hyde</span>
                </address>
                in the category "blog"
            </div>
        </header>
        <figure aria-label="Cover image" role="doc-cover" itemprop="image" itemscope=""
            itemtype="https://schema.org/ImageObject">
            <img src="https://raw.githubusercontent.com/hydephp/hydephp.github.io/gh-pages/media/kitten-756956_640-min.jpg"
                alt="Image of a small kitten with its head tilted, sitting in a basket weaved from nature material."
                title="Kitten Gray Kitty [sic]" itemprop="image" class="mb-0">
            <figcaption aria-label="Image caption" itemprop="caption">
                Image by <span itemprop="creator" itemscope="" itemtype="https://schema.org/Person"><a
                        href="https://pixabay.com/photos/kitten-gray-kitty-kitty-756956/" rel="author noopener"
                        itemprop="url"><span itemprop="name">Godsgirl_madi</span></a></span>. <span
                    itemprop="copyrightNotice">Copyright (c) 2022</span>. License <a
                    href="https://pixabay.com/service/license/" rel="license nofollow noopener"
                    itemprop="license">Pixabay License</a>
            </figcaption>

            <meta itemprop="text"
                content="Image of a small kitten with its head tilted, sitting in a basket weaved from nature material.">

            <meta itemprop="name" content="Kitten Gray Kitty [sic]">

        </figure>
        <div aria-label="Article body" itemprop="articleBody">
            <h2>Write something awesome.</h2>
            <p>Lorem markdownum cuius emissi vastique in primum nubila natamque per abdita
                tenetur ut et arte! Et adhuc foedera fontes. <strong>Haut cum ortus</strong> intravere
                contigit tantum Si essem tibi, dotatissima quae cruentas Troiani.</p>
            <h2>Basic elements</h2>
            <h3>List with three items</h3>
            <ul>
                <li>one</li>
                <li>two</li>
                <li>tree</li>
            </ul>
            <h3>Numbered list</h3>
            <ol>
                <li>one</li>
                <li>two</li>
                <li>tree</li>
            </ol>
            <h3>Blockquote</h3>
            <blockquote>
                <p>This is a blockquote</p>
            </blockquote>
            <h3>Images</h3>
            <p><img src="https://raw.githubusercontent.com/hydephp/hydephp.github.io/gh-pages/media/kitten-756956_640-min.jpg"
                    alt="Alt title" title="Caption"></p>
            <h3>Links</h3>
            <p><a href="https://www.google.com">Link text leading to google.com</a></p>
            <h2>Code blocks</h2>
            <pre><code class="language-html">&lt;div&gt;
  &lt;h1&gt;Hello World&lt;/h1&gt;
&lt;/div&gt;
</code></pre>
            <p><code>inline code</code></p>

        </div>
        <span class="sr-only">End of article</span>
    </article>
</main>
<hr><mark>Documentation page</mark> Markdown from:
https://github.com/tailwindlabs/tailwindcss-typography/blob/master/demo/components/MarkdownSample.mdx (License MIT)
<main id="content" class="mx-auto max-w-7xl py-16 px-8">
    <article aria-label="Article" id="posts/tailwind-typography-demo" itemscope="" itemtype="https://schema.org/Article"
        class="post-article mx-auto prose dark:prose-invert">
        <meta itemprop="identifier" content="tailwind-typography-demo">

        <header aria-label="Header section" role="doc-pageheader">
            <h1 itemprop="headline" class="mb-4">Tailwind Typography Demo</h1>
            <div id="byline" aria-label="About the post" role="doc-introduction">
                Posted <time itemprop="dateCreated datePublished" datetime="2022-05-01T16:00:00+00:00"
                    title="Sunday May 1st, 2022, at 4:00pm">May 1st, 2022</time>
                by author
                <address itemprop="author" itemscope="" itemtype="https://schema.org/Person"
                    aria-label="The post author" style="display: inline;">
                    <span itemprop="name" aria-label="The author's name" title="@tailwindlabs">tailwindlabs</span>
                </address>
                in the category "blog"
            </div>
        </header>
        <div aria-label="Article body" itemprop="articleBody">
            <p classname="lead">
                Until now, trying to style an article, document, or blog post with Tailwind has been a tedious
                task that required a keen eye for typography and a lot of complex custom CSS.
            </p>
            <p>By default, Tailwind removes all of the default browser styling from paragraphs, headings, lists and
                more. This ends up being really useful for building application UIs because you spend less time undoing
                user-agent styles, but when you <em>really are</em> just trying to style some content that came from a
                rich-text editor in a CMS or a markdown file, it can be surprising and unintuitive.</p>
            <p>We get lots of complaints about it actually, with people regularly asking us things like:</p>
            <blockquote>
                <p>Why is Tailwind removing the default styles on my <code>h1</code> elements? How do I disable this?
                    What do you mean I lose all the other base styles too?</p>
            </blockquote>
            <p>We hear you, but we're not convinced that simply disabling our base styles is what you really want. You
                don't want to have to remove annoying margins every time you use a <code>p</code> element in a piece of
                your dashboard UI. And I doubt you really want your blog posts to use the user-agent styles either ??? you
                want them to look <em>awesome</em>, not awful.</p>
            <p>The <code>@tailwindcss/typography</code> plugin is our attempt to give you what you <em>actually</em>
                want, without any of the downsides of doing something stupid like disabling our base styles.</p>
            <p>It adds a new <code>prose</code> class that you can slap on any block of vanilla HTML content and turn it
                into a beautiful, well-formatted document:</p>
            <pre><code class="language-html">&lt;article class="prose"&gt;
  &lt;h1&gt;Garlic bread with cheese: What the science tells us&lt;/h1&gt;
  &lt;p&gt;
    For years parents have espoused the health benefits of eating garlic bread with cheese to their
    children, with the food earning such an iconic status in our culture that kids will often dress
    up as warm, cheesy loaf for Halloween.
  &lt;/p&gt;
  &lt;p&gt;
    But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases
    springing up around the country.
  &lt;/p&gt;
  &lt;!-- ... --&gt;
&lt;/article&gt;
</code></pre>
            <p>For more information about how to use the plugin and the features it includes, <a
                    href="https://github.com/tailwindcss/typography/blob/master/README.md">read the documentation</a>.
            </p>
            <hr>
            <h2>What to expect from here on out</h2>
            <p>What follows from here is just a bunch of absolute nonsense I've written to dogfood the plugin itself. It
                includes every sensible typographic element I could think of, like <strong>bold text</strong>, unordered
                lists, ordered lists, code blocks, block quotes, <em>and even italics</em>.</p>
            <p>It's important to cover all of these use cases for a few reasons:</p>
            <ol>
                <li>We want everything to look good out of the box.</li>
                <li>Really just the first reason, that's the whole point of the plugin.</li>
                <li>Here's a third pretend reason though a list with three items looks more realistic than a list with
                    two items.</li>
            </ol>
            <p>Now we're going to try out another header style.</p>
            <h3>Typography should be easy</h3>
            <p>So that's a header for you ??? with any luck if we've done our job correctly that will look pretty
                reasonable.</p>
            <p>Something a wise person once told me about typography is:</p>
            <blockquote>
                <p>Typography is pretty important if you don't want your stuff to look like trash. Make it good then it
                    won't be bad.</p>
            </blockquote>
            <p>It's probably important that images look okay here by default as well:</p>
            <figure>
                <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80"
                    alt="">
                <figcaption>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old.
                </figcaption>
            </figure>
            <p>Now I'm going to show you an example of an unordered list to make sure that looks good, too:</p>
            <ul>
                <li>So here is the first item in this list.</li>
                <li>In this example we're keeping the items short.</li>
                <li>Later, we'll use longer, more complex list items.</li>
            </ul>
            <p>And that's the end of this section.</p>
            <h2>What if we stack headings?</h2>
            <h3>We should make sure that looks good, too.</h3>
            <p>Sometimes you have headings directly underneath each other. In those cases you often have to undo the top
                margin on the second heading because it usually looks better for the headings to be closer together than
                a paragraph followed by a heading should be.</p>
            <h3>When a heading comes after a paragraph ???</h3>
            <p>When a heading comes after a paragraph, we need a bit more space, like I already mentioned above. Now
                let's see what a more complex list would look like.</p>
            <ul>
                <li>
                    <p><strong>I often do this thing where list items have headings.</strong></p>
                    <p>For some reason I think this looks cool which is unfortunate because it's pretty annoying to get
                        the styles right.</p>
                    <p>I often have two or three paragraphs in these list items, too, so the hard part is getting the
                        spacing between the paragraphs, list item heading, and separate list items to all make sense.
                        Pretty tough honestly, you could make a strong argument that you just shouldn't write this way.
                    </p>
                </li>
                <li>
                    <p><strong>Since this is a list, I need at least two items.</strong></p>
                    <p>I explained what I'm doing already in the previous list item, but a list wouldn't be a list if it
                        only had one item, and we really want this to look realistic. That's why I've added this second
                        list item so I actually have something to look at when writing the styles.</p>
                </li>
                <li>
                    <p><strong>It's not a bad idea to add a third item either.</strong></p>
                    <p>I think it probably would've been fine to just use two items but three is definitely not worse,
                        and since I seem to be having no trouble making up arbitrary things to type, I might as well
                        include it.</p>
                </li>
            </ul>
            <p>After this sort of list I usually have a closing statement or paragraph, because it kinda looks weird
                jumping right to a heading.</p>
            <h2>Code should look okay by default.</h2>
            <p>I think most people are going to use <a href="https://highlightjs.org/">highlight.js</a> or <a
                    href="https://prismjs.com/">Prism</a> or something if they want to style their code blocks but it
                wouldn't hurt to make them look <em>okay</em> out of the box, even with no syntax highlighting.</p>
            <p>Here's what a default <code>tailwind.config.js</code> file looks like at the time of writing:</p>
            <pre><code class="language-js">module.exports = {
  purge: [],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
}
</code></pre>
            <p>Hopefully that looks good enough to you.</p>
            <h3>What about nested lists?</h3>
            <p>Nested lists basically always look bad which is why editors like Medium don't even let you do it, but I
                guess since some of you goofballs are going to do it we have to carry the burden of at least making it
                work.</p>
            <ol>
                <li>
                    <strong>Nested lists are rarely a good idea.</strong>
                    <ul>
                        <li>You might feel like you are being really "organized" or something but you are just creating
                            a gross shape on the screen that is hard to read.</li>
                        <li>Nested navigation in UIs is a bad idea too, keep things as flat as possible.</li>
                        <li>Nesting tons of folders in your source code is also not helpful.</li>
                    </ul>
                </li>
                <li>
                    <strong>Since we need to have more items, here's another one.</strong>
                    <ul>
                        <li>I'm not sure if we'll bother styling more than two levels deep.</li>
                        <li>Two is already too much, three is guaranteed to be a bad idea.</li>
                        <li>If you nest four levels deep you belong in prison.</li>
                    </ul>
                </li>
                <li>
                    <strong>Two items isn't really a list, three is good though.</strong>
                    <ul>
                        <li>Again please don't nest lists if you want people to actually read your content.</li>
                        <li>Nobody wants to look at this.</li>
                        <li>I'm upset that we even have to bother styling this.</li>
                    </ul>
                </li>
            </ol>
            <p>The most annoying thing about lists in Markdown is that <code>&lt;li&gt;</code> elements aren't given a
                child <code>&lt;p&gt;</code> tag unless there are multiple paragraphs in the list item. That means I
                have to worry about styling that annoying situation too.</p>
            <ul>
                <li>
                    <p><strong>For example, here's another nested list.</strong></p>
                    <p>But this time with a second paragraph.</p>
                    <ul>
                        <li>These list items won't have <code>&lt;p&gt;</code> tags</li>
                        <li>Because they are only one line each</li>
                    </ul>
                </li>
                <li>
                    <p><strong>But in this second top-level list item, they will.</strong></p>
                    <p>This is especially annoying because of the spacing on this paragraph.</p>
                    <ul>
                        <li>
                            <p>As you can see here, because I've added a second line, this list item now has a
                                <code>&lt;p&gt;</code> tag.</p>
                            <p>This is the second line I'm talking about by the way.</p>
                        </li>
                        <li>
                            <p>Finally here's another list item so it's more like a list.</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>A closing list item, but with no nested list, because why not?</p>
                </li>
            </ul>
            <p>And finally a sentence to close off this section.</p>
            <h2>There are other elements we need to style</h2>
            <p>I almost forgot to mention links, like <a href="https://tailwindcss.com">this link to the Tailwind CSS
                    website</a>. We almost made them blue but that's so yesterday, so we went with dark gray, feels
                edgier.</p>
            <p>We even included table styles, check it out:</p>
            <table>
                <thead>
                    <tr>
                        <th>Wrestler</th>
                        <th>Origin</th>
                        <th>Finisher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bret "The Hitman" Hart</td>
                        <td>Calgary, AB</td>
                        <td>Sharpshooter</td>
                    </tr>
                    <tr>
                        <td>Stone Cold Steve Austin</td>
                        <td>Austin, TX</td>
                        <td>Stone Cold Stunner</td>
                    </tr>
                    <tr>
                        <td>Randy Savage</td>
                        <td>Sarasota, FL</td>
                        <td>Elbow Drop</td>
                    </tr>
                    <tr>
                        <td>Vader</td>
                        <td>Boulder, CO</td>
                        <td>Vader Bomb</td>
                    </tr>
                    <tr>
                        <td>Razor Ramon</td>
                        <td>Chuluota, FL</td>
                        <td>Razor's Edge</td>
                    </tr>
                </tbody>
            </table>
            <p>We also need to make sure inline code looks good, like if I wanted to talk about
                <code>&lt;span&gt;</code> elements or tell you the good news about <code>@tailwindcss/typography</code>.
            </p>
            <h3>Sometimes I even use <code>code</code> in headings</h3>
            <p>Even though it's probably a bad idea, and historically I've had a hard time making it look good. This
                <em>"wrap the code blocks in backticks"</em> trick works pretty well though really.</p>
            <p>Another thing I've done in the past is put a <code>code</code> tag inside of a link, like if I wanted to
                tell you about the <a href="https://github.com/tailwindcss/docs"><code>tailwindcss/docs</code></a>
                repository. I don't love that there is an underline below the backticks but it is absolutely not worth
                the madness it would require to avoid it.</p>
            <h4>We haven't used an <code>h4</code> yet</h4>
            <p>But now we have. Please don't use <code>h5</code> or <code>h6</code> in your content, Medium only
                supports two heading levels for a reason, you animals. I honestly considered using a <code>before</code>
                pseudo-element to scream at you if you use an <code>h5</code> or <code>h6</code>.</p>
            <p>We don't style them at all out of the box because <code>h4</code> elements are already so small that they
                are the same size as the body copy. What are we supposed to do with an <code>h5</code>, make it
                <em>smaller</em> than the body copy? No thanks.</p>
            <h3>We still need to think about stacked headings though.</h3>
            <h4>Let's make sure we don't screw that up with <code>h4</code> elements, either.</h4>
            <p>Phew, with any luck we have styled the headings above this text and they look pretty good.</p>
            <p>Let's add a closing paragraph here so things end with a decently sized block of text. I can't explain why
                I want things to end that way but I have to assume it's because I think things will look weird or
                unbalanced if there is a heading too close to the end of the document.</p>
            <p>What I've written here is probably long enough, but adding this final sentence can't hurt.</p>

        </div>
        <span class="sr-only">End of article</span>
    </article>
</main>
@endsection
