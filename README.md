# jamcom
Jamcom is made for news portals with a clean wide display of blue and white colors. You can use this theme for your news portal or personal blog or agency. This is a great free theme for your Bludit website. You can download it now.

Feature
Fast, simple and responsive theme.
Categories appear automatically in the main menu and Sidebar.
Search functionality (require activated). 
SEO Friendly.
All major browsers fully supported (IE 9+).
Feature image with an optional caption (figure).
Clean blog list in homepage.
Responsive image and youtube video in blog post.
Instalation
First Download the jamcom.zip.
Extract the 'jamcom.zip' file.
Upload the 'jamcom' Folder in /bl-themes.
Sign in to your Admin panel (yoursite.com/admin) and go to the Themes Tab.
Activate 'jamcom'.
Start using it.
Set up Custom Field
Add the script below in the Custom Field area.

{
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
Youtube Video
You can put Youtube videos on your blog content by doing this:

1. Activate the plugin Custom fields parser

Admin panel > Sidebar > Plugins > Custom fields parser > Activate
2. Edit the plugin settings, you can see there is a textarea for the custom field youtube, add the following iframe for the custom field.

<div class="embed-responsive embed-responsive-16by9">
<iframe class="embed-responsive-item rounded" src="{{ value }}" frameborder="0" allow="autoplay" allowfullscreen></iframe>
</div>
3. The variable {{ value }} contains the value from the custom field defined on the page. Create a new page and write a YouTube link in the custom field youtube.

Admin panel > Sidebar > New content > Options > Custom > YouTube
4. Add the following YouTube embed link.

https://www.youtube.com/embed/dQw4w9WgXcQ
5. Now in the content of the page, you can define where will be the YouTube embed video, for example:

Hello, check out my latest video.
{{ youtube }}
After that, you can go to the new page and see how the embed video appears inside the page. Now you can create a new page and set a different YouTube link and the parse will show the embed code with the video.

This plugin avoids change the embed code on each page where you have an embed video.

Learn more about Custom Fields here

Remove 404 Page from menu
Open "sidebar.php"
In line 26 find "error" change to "error-404" It depends on the name of the page you created for the error page.
Click save.
