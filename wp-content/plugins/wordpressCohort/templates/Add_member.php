<div class="container">

   


    <form method="post">

        <h1>Add Cohort member</h1>
        <div>
            <label for="name">Name</label>
            <input type="text" id='name' name="name" required />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id='email' required />
        </div>
        <div>
            <label for="phone">Phone Number</label>
            <input type="number" name="phone" id='phone' required />
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id='age' required />
        </div>
        <input type="submit" name='submit'>
        <?php

global $success_msg;

if ($success_msg) {
    echo "<p id='message'>Cohort member has been added successfully</p>";
}
?>
    </form>
</div>
</div>
<style>
    body {
        font-size: 16px;
        line-height: 1.5;
        background: radial-gradient(#0B20D8, #ffffff) no-repeat center center fixed;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h1 {
        color: black;
    }

    label {
        display: block;
        color: black;
        margin-bottom: 10px;
        font-family: "Roboto Mono", monospace;
        font-size: 18px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"] {
        padding: 5px;
        margin-bottom: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #040404;
        color: white;
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #040404;
    }

    #message {
    background-color: #040404;
    color:#ffffff;
    border-radius: 5px;
    font-size: 20px;
    font-weight: 800;
    }
</style>