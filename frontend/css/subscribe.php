<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    //get the latest news using fetch API
    $newsAPI = "https://newsapi.org/v2/top-headlines?country=us&category=technology&apiKey=2cc204642c1c4b42b1171b82e8e25286";
    $newsResponse = file_get_contents($newsAPI);
    $newsData = json_decode($newsResponse);

    // preparing the email content
    $emailSubject = "Latest News from IT Discover Hub";
    $emailMessage = "Hello Subscribers! Thank you for subscribing to our latest news and updates. Here are the latest news:\n";

    foreach ($newsData->articles as $article) {
        $emailMessage .= "\nTitle: {$article->title}\nDescription: {$article->description}\nURL: {$article->url}\n\n";
    }

    // execut the send the mail
    mail($email, $emailSubject, $emailMessage);
}
