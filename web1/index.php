<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Music Vibe Selector - Vintage Experience</title>
        <meta name="description" content="Choose your music vibe and enter the retro experience">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vintage-forms.css">
    </head>

    <body>

        <h1 class="glitch">🎵 Vintage Music Selector 🎵</h1>

        <form method="post" action="views.php">
            <h2>Enter Your Details</h2>

            <label for="name">Your Desired Nickname:</label>
            <input type="text"
                   id="name"
                   name="name"
                   placeholder="Enter your alias..."
                   required>

            <fieldset>
                <legend>Choose Your Vibe</legend>

                <div >
                    <input type="radio" id="lofi" name="music" value="lofi" required>
                    <label for="lofi">🎧 Lofi - Chill & Relaxing</label>
                </div>

                <div >
                    <input type="radio" id="rock" name="music" value="rock">
                    <label for="rock">🎸 Rock - Raw & Energetic</label>
                </div>

                <div >
                    <input type="radio" id="rnb" name="music" value="r&b">
                    <label for="rnb">🎤 R&B - Smooth & Soulful</label>
                </div>
            </fieldset>

            <div >
                <button type="submit">Lessssssss go</button>
            </div>
        </form>

    </body>
</html>