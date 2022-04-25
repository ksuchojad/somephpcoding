<html>
 
<head>
 
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<title>Miniksiążka telefoniczna</title>
<style type="text/css">
    body{
        background: #DDFFDD;
        font-family: arial;
        font-size:12px;
    }
    table,td{
        font-family: arial;
        font-size: 12px;
    }
    .tab{
        border: 1px dotted #00AD00;
        width: 90%;
    background: #CFFFCF;
    }
    h1{
        text-align: center;
        color: green;
        text-decoration: underline;
    }
    h2{
        color: green;
    }
    a,a:visited{
        color: green;
    }
    a:hover{
        background: #73FF73;
    }
    hs{
        color: green;
        height: 1px;
    }
    .motto{
        text-align: center;
        border: 1px solid white;
        width: 95%;
        margin-left: 5%;
        background: #00cd00;
        color: white;
    }
    </style>
    </head>
 
    <body>
    <h1>Mini książka telefoniczna</h1>
    <div class="motto">Motto<?php include('motto.php')?></div>
    <table align="center" class="tab">
    <tr>
        <td valign="top">
            <div align="center">
            <!--menu-->
                [<a href="index.php?pokaz=szukaj">Szukaj</a>]
                [<a href="index.php?pokaz=lista">Lista</a>]
                [<a href="index.php?pokaz=info">Info</a>]
            <hr/>
            </div>
            <!--tresc glowna-->
                <?php include('sys.php');?>
            <!--koniec-->
        </td>
        <td width="120" valign="top">
        <div style="text-align:center;background:#b1ffb1:1px solid green;">

<?php include('kalendarz.php');?>
</div>
</td>
</tr>
</table>
</body>
</html>