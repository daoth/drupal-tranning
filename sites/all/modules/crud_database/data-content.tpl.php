<style>
    .title-red-underline{
        font-size: 20px;
        padding: 0px;
        margin-bottom: 20px;
        display: block;
        width: 100%;
        border-bottom: 1px solid;
        padding-bottom: 10px;
        color: red;
    }
</style>
<script>
function sendThisContent(id){
        var email = prompt("Insert email address", "dao.th@sutrixmedia.com");
        if(email !== null)
            window.location = "/crud_database/email/"+email+"/"+id;

}
</script>

<h1 class='title-red-underline'><?php print $name;?></h1><br>
<?php print $description;?><br><br>
<a href='javascript:void(0)' onclick='sendThisContent(<?php print $myid;?>)'>Email this content</a>
