<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: url('./assets/form-bg.jpg');
            object-fit: cover;
            overflow: hidden;
        }
    </style>
</head>

<body class="flex flex-col items-center justify-center w-screen h-screen p-4">

    <form action="addForm.php" method="post" class="flex flex-col gap-2 w-max border-[4px] border-black  py-4 px-16 rounded">
        <br />
        <label class="flex gap-4 justify-between" for="name">
            <p class="text-white font-bold">Name:</p>
            <input class="border border-black rounded" type="text" name="name" id="name" />
        </label>
        <br />
        <br />
        <label class="flex gap-4  justify-between" for="email">
            <p class="text-white font-bold">Email:</p>
            <input class="border border-black rounded" type="text" name="email" id="email" />
        </label>
        <br />
        <br />
        <label class="flex gap-4 justify-between" for="phoneNumber">
            <p class="text-white font-bold">Phone Number:</p>
            <input class="border border-black rounded" type="number" name="phoneNumber" id="phoneNumber" />
        </label>
        <br />
        <br />

        <button class="border border-black rounded bg-blue-400 hover:bg-blue-500 hover:text-white transition-all px-4 py-2" type="submit">Submit</button>
    </form>
</body>

</html>