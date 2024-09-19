<?php require "../App/views/components/head.php"; ?>

<div class="logout-container">
    <form action="/logout" method="POST">
        <button class="shadow_logout__btn">Logout</button>
    </form>
</div>

<div class="quizzes-header-container">
    <h1>Available Quizzes</h1>
</div>


<div class="quizzes-container">
    <div class="container quiz-container">
        <h2>Select a Quiz Theme</h2>
        

        <form action="/start-quiz.php" method="GET">
            <select name="theme" required>
                <option value="">-- Choose a Quiz Theme --</option>
                <option value="1">General Knowledge</option>
                <option value="2">Math</option>
                <option value="3">Science</option>
            </select>
            
            <button type="submit">Start Quiz</button>
        </form>
        
        <form action="/leader-board">
            <button>Leaderboard</button>
        </form>
    </div>
</div>

<?php require "../App/views/components/footer.php"; ?>

<style>

.container {
    width: 350px;  
    height: 500px; 
    margin: 10px;  
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-sizing: border-box; 
}


.logout-container {
    text-align: center;
    margin-bottom: 30px;
}


.quizzes-header-container {
    text-align: center;
    margin-bottom: 30px;
}


.quizzes-container {
    display: flex;
    flex-wrap: wrap; 
    justify-content: center; 
    gap: 20px; 
}


.shadow_logout__btn {
}

</style>