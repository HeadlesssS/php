<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name= htmlspecialchars($_POST["name"]);
    $music=htmlspecialchars($_POST["music"]);
    echo "<h2>Hi, $name!</h2>";
    echo "<p><b>Let's vibe to your beloved : $music music </b></p>";

    if ($music == "rock"){
        echo'        
        <audio id="audio" autoplay loop style = "display:none;">
        <source src="rock.mp3" type="audio/mpeg">
        </audio>';
        $bg_image="https://parade.com/.image/t_share/MTkwNTgxMjYyNzA0NzE1NjQ0/joan-jett-runaways.jpg";


    }
    elseif($music=="lofi"){
        echo 'music playing';
        $bg_image="https://i.ytimg.com/vi/5qap5aO4i9A/maxresdefault.jpg";
        header("location:lofi.php?music=lofi&bg_image=" . urlencode($bg_image) . "&name=" . urlencode($name));
        exit;

    }
    else{
        echo'<audio id="audio" autoplay loop style = "display:none;">
        <source src="r&b.mp3" type="audio/mpeg" style = "display:none;">
        </audio>
        ';
        $bg_image="https://i.scdn.co/image/ab67616d0000b2738e8b9052903082f05b4714b2";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Received - Vintage Vibes</title>
    <link rel="stylesheet" href="vintage-forms.css">
</head>
<body<?php echo isset($bg_image) ? ' class="with-bg-image" style="background-image: url(\'' . htmlspecialchars($bg_image) . '\');"' : ''; ?>>

    <!-- Animated background particles -->
    <div class="bg-animation">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="data-display">
        <h1 class="glitch">Thank You!</h1>

        <?php if (isset($name) && isset($music)): ?>
        <div class="message success">
            <h2>Hi, <?php echo htmlspecialchars($name); ?>!</h2>
            <p><strong>Let's vibe to your beloved: <?php echo htmlspecialchars($music); ?> music</strong></p>
        </div>

        <?php if ($music == "rock"): ?>
        <div class="audio-indicator">
            🎸 Rock music is now playing! 🎸
        </div>
        <?php elseif ($music == "r&b"): ?>
        <div class="audio-indicator">
            🎵 R&B vibes are flowing! 🎵
        </div>
        <?php endif; ?>

        <?php endif; ?>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="index.php">
                <button type="button">Go Back to Music Selection</button>
            </a>
        </div>
    </div>

</body>
</html>

