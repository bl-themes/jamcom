# jamcom
<p>Jamcom is made for news portals with a clean wide display of blue and white colors. You can use this theme for your news portal or personal blog or agency. This is a great free theme for your Bludit website. You can download it now.</p>
<h5>Feature</h5>
<ul>
<li>Fast, simple and responsive theme.</li>
<li>Categories appear automatically in the main menu and Sidebar.</li>
<li>Search functionality (require activated). </li>
<li>SEO Friendly.</li>
<li>All major browsers fully supported (IE 9+).</li>
<li>Feature image with an optional caption (figure).</li>
<li>Clean blog list in homepage.</li>
<li>Responsive image and youtube video in blog post.</li>
</ul>
<h5>Instalation</h5>
<ul>
<li>First Download the jamcom.zip.</li>
<li>Extract the 'jamcom.zip' file.</li>
<li>Upload the 'jamcom' Folder in /bl-themes.</li>
<li>Sign in to your Admin panel (yoursite.com/admin) and go to the Themes Tab.</li>
<li>Activate 'jamcom'.</li>
<li>Start using it.</li>
</ul>
<h5>Set up Custom Field</h5>
<p>Add the script below in the Custom Field area.</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;">{
    {
    "figure": {
        "type": "string",
        "label": "Figure",
        "tip": "Insert your title image."
    },
    "youtube": {
        "type": "string",
        "placeholder": "Write a YouTube video embed link",
        "label": "YouTube"
    }
}
</pre>
<h5>Youtube Video</h5>
<p>You can put Youtube videos on your blog content by doing this:</p>
<p>1. Activate the plugin Custom fields parser</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;">Admin panel &gt; Sidebar &gt; Plugins &gt; Custom fields parser &gt; Activate
</pre>
<p>2. Edit the plugin settings, you can see there is a textarea for the custom field youtube, add the following iframe for the custom field.</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;">&lt;div class="embed-responsive embed-responsive-16by9"&gt;
&lt;iframe class="embed-responsive-item rounded" src="<span style="color: #e03e2d;">{{ value }}</span>" frameborder="0" allow="<span style="color: #e03e2d;">autoplay</span>" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
</pre>
<p>3. The variable <span style="color: #e03e2d;">{{ value }}</span> contains the value from the custom field defined on the page. Create a new page and write a YouTube link in the custom field <span style="color: #e03e2d;">youtube</span>.</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;">Admin panel &gt; Sidebar &gt; New content &gt; Options &gt; Custom &gt; YouTube
</pre>
<p>4. Add the following YouTube embed link.</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;"><a href="https://www.youtube.com/embed/dQw4w9WgXcQ">https://www.youtube.com/embed/dQw4w9WgXcQ</a>
</pre>
<p>5. Now in the content of the page, you can define where will be the YouTube embed video, for example:</p>
<pre class="text-dark rounded" style="background-color: #fdf8e6; padding: 15px;">Hello, check out my latest video.
<span style="color: #e03e2d;">{{ youtube }}
</span></pre>
<p>After that, you can go to the new page and see how the embed video appears inside the page. Now you can create a new page and set a different YouTube link and the parse will show the embed code with the video.</p>
<p>This plugin avoids change the embed code on each page where you have an embed video.</p>
<p>Learn more about Custom Fields <a href="https://docs.bludit.com/en/content/custom-fields" target="_blank" rel="noopener">here</a></p>
<h5>Remove 404 Page from menu</h5>
<ol>
<li>Open "sidebar.php"</li>
<li>In line 26 find "error" change to "error-404" It depends on the name of the page you created for the error page.</li>
<li>Click save.</li>
</ol>
