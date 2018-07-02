<h1>NEWS</h1>

<link rel="stylesheet" href="css/style.css">
<a href="index.php?page=home">Home</a>
<a href="index.php?page=news">News</a>
<a href="index.php?page=contact">Contact</a>
<a href="index.php?page=about">About</a>


<p>
    {foreach from=$articles item=article}
<hr>
    <h2>{$article[0]}</h2>
    <p>{$article[1]}</p>
<img src="{$article[2]}" alt="foobar" />
{/foreach}
</p>

<hr>
<h3>Current Page:  {$current_page}</h3>
{if $current_page gt 1}
    <a href="index.php?page=news&pageno={$current_page - 1}">Previous</a>
{/if}

<p id="hond"> - {$current_page} -</p>

{if $current_page lt $number_of_pages}
    <a href="index.php?page=news&pageno={$current_page + 1}">Next</a>
{/if}