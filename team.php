<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>OUR TEAM</title>
</head>
<body>

    <?php include 'header.php'; ?>

    <main>
    <h1 class="heading">MEET OUR TEAM</h1>
    <div class="image-container">
        <div class="image" onclick="fetch_info(0)"><img src="image/binaday.jpg"></div>
        <div class="image" onclick="fetch_info(1)"><img src="image/camila.jpg"></div>
        <div class="image" onclick="fetch_info(2)"><img src="image/floramae.jpg"></div>
        <div class="image" onclick="fetch_info(3)"><img src="image/jules.jpg"></div>
        <div class="image" onclick="fetch_info(4)"><img src="image/rose.jpg"></div>
    </div>

    <div class="info-container">
        <img class="profile" id="profile" src="image/camila.jpg"/>
        <div class="info">
            <h1 class="name" id="name">Camila Jadlocon</h1>
            <h3 class="status" id="status">IT Student</h3>
            <p class="about" id="about">
                “The best way to predict your future is to create it.”.
            </p>
        </div>
    </div>
    </main>
    <script>
        function fetch_info(i){
            let profile=["image/binaday.jpg", "image/camila.jpg", "image/floramae.jpg", "image/jules.jpg", "image/rose.jpg"];
            let name=["John Mark Binaday", "Camila Jadlocon", "Flora Mae Panis", "Jules Zulueta", "Rose Marie Ulnagan"];
            let status=["IT student", "IT student", "IT student", "IT student", "IT student"];
            document.getElementById("profile").src=profile[i];
            document.getElementById("name").innerHTML=name[i];
            document.getElementById("status").innerHTML=status[i];
            document.getElementById("about").innerHTML= name[i] + 
            "Driven to be successful person someday.Learning is a treasure that will follow its owner everywhere.";
        }
        
    </script>

   <?php include 'footer.php'; ?>
    

</body>

</html>