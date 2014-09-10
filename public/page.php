<html>
<head>
    <title>Archive</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="jquery-2.0.3.min.js"></script>

    <style>
        #text, #text *, #pdf{
            background-color: #fff;
        }
    </style>
</head>
<body style="width:100%">

    <div class="container">
        <section id="book-nav">
            <h1>Book One <small>Page 3</small></h1>
        </section>

        <section id="pdf" style="height:80%; width:48%; float:left">
            <p class="expand">Expand</p>
            <iframe src="/books/3_split_1967-02-xx magazine_opt.pdf" style="width:100%; height:100%"></iframe>
        </section>

        <section id="text" style="height:80%; width:48%; float:right">
            <p class="expand">Expand</p>
            <iframe src="/text.txt" style="width:100%; height:100%"></iframe>
        </section>

        <section id="page-nav" class="col-md-8 col-md-offset-2 text-center">
            <a href="" class="btn btn-primary pull-left" title="previous page">
                <span class="ico ico-left"></span>
                previous page
            </a>
            <a href="book.php" class="btn btn-primary" title="Back to book">
                <span class="ico ico-up"></span>
                Back to book
            </a>
            <a href="" class="btn btn-primary pull-right" title="next page">
                <span class="ico ico-right"></span>
                next page
            </a>
        </section>
    </div>

    <script>
        $('#text, #pdf').on('click', function(e){
            if($(this).data('expanded')){
                $(this).css('width','48%').css('position','relative').css('z-index', 1);
                $(this).data('expanded', false);
                $('.expand', this).html('Expand');

            }else{
                $(this).css('width','100%').css('position','fixed').css('top','0')
                    .css('left', '0').css('height', '100%').css('z-index', 1000);
                $(this).data('expanded', true);
                $('.expand', this).html('Contract');
            }
        });
    </script>
</body>
</html>