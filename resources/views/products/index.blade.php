<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Collection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        
        h1 {
            text-align: center;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .anime-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .anime-title {
            color: #2c3e50;
            margin-top: 0;
            font-size: 24px;
        }
        
        .genre {
            display: inline-block;
            background: linear-gradient(to bottom, #e3e3e7, #29292b);
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            margin: 10px 0;
        }
        
        .description {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anime Collection</h1>
        
        @foreach($animeProducts as $anime)
        <div class="anime-card">
            <h2 class="anime-title">{{ $anime['title'] }}</h2>
            <span class="genre">{{ $anime['genre'] }}</span>
            <p class="description">{{ $anime['description'] }}</p>
        </div>
        @endforeach
    </div>
</body>
</html>