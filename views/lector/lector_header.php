<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>E-Journal FEІT</title>
        <link rel="stylesheet" href="/template/css/style.css">
        <link rel="stylesheet" href="/template/css/mystyle.css">
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
        <script src="/template/js/bootstrap.js"></script>
        <script>
            function showEdit(editableObj) {
                $(editableObj).css("background","#FFF");
            }
            function saveToDatabase(editableObj,column,id,groupID,subjectID) {
                $(editableObj).css("background","#FFF url(/template/images/load.gif) no-repeat right");
                $.ajax({
                    url: "/lector/ajax/numlabrgr",
                    type: "POST",
                    data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id+'&groupID='+groupID+'&subjectID='+subjectID,
                    success: function(data){
                        $(editableObj).css("background","");
                    }
                });
            }
        </script>
    </head>
    <body style="overflow-y: scroll">
    <div class="container">
        <nav class="navbar navbar-inverse  navbar-fixed shadow-nav" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">E-Journal FEІT</a>
                </div>
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-2" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><?=$_SESSION['logged_user']?><span class="sr-only">(current)</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/logout">Вихід</a></li>
                    </ul>
                </div>
            </div>
        </nav>