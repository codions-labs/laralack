@extends('layouts.page')
@section('pageTitle', 'Markdown Guide')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12" id="help-images-wrapper">
    <h1 class="entry-title">Markdown</h1>

    <hr />

    <p>Markdown is a text formatting syntax inspired on plain text email. In the words of its creator, <a href="http://daringfireball.net/">John Gruber</a>:</p>

    <blockquote>
        <p>The idea is that a Markdown-formatted document should be publishable as-is, as plain text, without looking like it’s been marked up with tags or formatting instructions.</p>
    </blockquote>

    <h2>Syntax Guide</h2>

    <h3>Strong and Emphasize</h3>

    <pre><code>*emphasize*    **strong**
_emphasize_    __strong__
</code></pre>

    <p><strong>Shortcuts</strong></p>

    <ul>
        <li>
            <p>Add/remove bold:</p>

            <p>⌘-B for Mac / Ctrl-B for Windows and Linux</p>
        </li>
        <li>
            <p>Add/remove italic:</p>

            <p>⌘-I for Mac / Ctrl-I for windows and Linux</p>
        </li>
    </ul>

    <h3>Links</h3>

    <p>Inline links:</p>

    <pre><code>[link text](http://url.com/ "title")
[link text](http://url.com/)
&lt;http://url.com&gt;
</code></pre>

    <p>Reference-style links:</p>

    <pre><code>[link text][id]

    [id]: http://url.com "title"
</code></pre>

    <p><strong>Shortcuts</strong></p>

    <ul>
        <li>
            <p>Add link:</p>

            <p>⌘-K for Mac / Ctrl-K for Windows and Linux</p>
        </li>
    </ul>

    <h3>Images</h3>

    <p>Inline images:</p>

    <pre><code>![alt text](http://path/to/img.jpg "title")
![alt text](http://path/to/img.jpg)
</code></pre>

    <p>Reference-style links:</p>

    <pre><code>![alt text][id]

    [id]: http://path/to/img.jpg "title"
</code></pre>

    <p><strong>Shortcuts</strong></p>

    <ul>
        <li>
            <p>Add image:</p>

            <p>⌥-⌘-I for Mac / Alt-Ctrl-I for Windows and Linux</p>
        </li>
    </ul>

    <h3>Headers</h3>

    <p>Atx-style headers:</p>

    <pre><code># h1
## h2
### h3
…
</code></pre>

    <p>Closing # are optional.</p>

    <pre><code># h1 #
## h2 ##
…
</code></pre>

    <h3>Lists</h3>

    <p>Ordered list without paragraphs:</p>

    <pre><code>1. foo
2. bar
</code></pre>

    <p>Unordered list with paragraphs:</p>

    <pre><code>* A list item.

  With multiple paragraphs.

* bar
</code></pre>

    <p>You can nest them:</p>

    <pre><code>* Abacus
  * anser
* Bubbles
  1. bunk
  2. bupkis
     * bar
  3. burper
* Cunning
</code></pre>

    <p><strong>Shortcuts</strong></p>

    <ul>
        <li>
            <p>Add/remove unordered list:</p>

            <p>⌘-L for Mac / Ctrl-L for Windows and Linux</p>
        </li>
        <li>
            <p>Add/remove ordered list:</p>

            <p>⌥-⌘-L for Mac / Alt-Ctrl-L for Windows and Linux</p>
        </li>
    </ul>

    <h3>Blockquotes</h3>

    <pre><code>&gt; Email-style angle brackets
&gt; are used for blockquotes.

&gt; &gt; And, they can be nested.

&gt; #### Headers in blockquotes
&gt; 
&gt; * You can quote a list.
&gt; * Etc.
</code></pre>

    <p><strong>Shortcuts</strong></p>

    <ul>
        <li>
            <p>Add/remove blockquote:</p>

            <p>⌘-’ for Mac / Ctrl-’ for Windows and Linux</p>
        </li>
    </ul>

    <h3>Code Spans</h3>

    <pre><code>`&lt;code&gt;` spans are delimited
by backticks.

You can include literal backticks
like `` `this` ``.
</code></pre>

    <h3>Code Blocks</h3>

    <p>Indent at least 4 spaces or 1 tab.</p>

    <pre><code>This is a normal paragraph

    this is code block
</code></pre>

    <h3>Horizontal Rules</h3>

    <p>Three or more dashes for asterisks.</p>

    <pre><code>---

* * *

- - - - 
</code></pre>

    <h3>Manual Line Breaks</h3>

    <p>End a line with two or more spaces:</p>

    <pre><code>Roses are red, [space][space]
Violets are blue. [space][space]
</code></pre>
</div>
</div>
</div>
@endsection