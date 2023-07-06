<!-- SCRIPT PHP -->
<?php 
    // ARRAY POSTS
    $posts = [

        '01-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Michael Jordan',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Scottie Pippen',
                'text' => 'Testo post 2'
            ],
        ],

        '02-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Larry Bird',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Moses Malone',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Pete Maravich',
                'text' => 'Testo post 3'
            ],
        ],
        '03-07-2023' => [
            [
                'title' => 'Post 1',
                'author' => 'Reggie Miller',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Tracy McGrady',
                'text' => 'Testo post 2'
            ],
            [
                'title' => 'Post 3',
                'author' => 'Dirk Nowitzki',
                'text' => 'Testo post 3'
            ],
            [
                'title' => 'Post 4',
                'author' => 'Michael Johnson',
                'text' => 'Testo post 4'
            ],
        ],
    ];
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>php-snack3</title>
    </head>
    <body>
        <main>
            <div class="container my-5">
                <div class="row">
                    <?php foreach($posts as $key => $date){?>
                        <hr>
                        <div class="col-12 text-center my-5">
                            <!-- Date Posts -->
                            <h2>
                                <?php echo $key ?>
                            </h2>
                            <!-- Posts -->
                            <?php foreach($date as $post){?>
                                <div class="border border-primary my-5">
                                    <div class="my-2">
                                        <strong>Titolo:</strong>
                                        <?php echo $post['title']?>
                                    </div>
                                    <div class="my-2">
                                        <strong>Autore:</strong>
                                        <?php echo $post['author']?>
                                    </div>
                                    <div class="my-2">
                                        <strong>Testo:</strong>
                                        <?php echo $post['text']?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </main>
    </body>
</html>