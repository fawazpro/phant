<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
</head>

<body>
    <style>
        body,
        html {
            height: 100%;
        }

        .content,
        .modal {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .content {
            background-color: orange;
            z-index: 100;
        }

        .modal {
            z-index: 101;
            background-color: #000;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.5s, visibility 0s 0.5s;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.5s;
        }
    </style>
    <section class="content">
        <a id="modal_button" href="#">Click here!</a>
    </section>

    <section class="modal">
        This is a modal page!
    </section>

    <script>
        document.querySelector('#modal_button').addEventListener('click', function(e) {
            document.querySelector('.modal').classList.add('active');
            e.preventDefault();
        });

        document.querySelector('.modal').addEventListener('click', function(e) {
            document.querySelector('.modal').classList.remove('active');
            e.preventDefault();
        });
    </script>
</body>

</html>