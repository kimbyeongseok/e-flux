<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-flux data insert</title>
    <style>
    .table {
        float: left;
    }

    .wrap {
        width: 80%;
        margin: auto;
    }

    li {
        list-style: none;
        padding: 10px 0;
    }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="table table_1">
            <h1>Insert Table 1</h1>
            <form action="insert_table_1.php" method="post" name="eflux_data" enctype="multipart/form-data">
                <li>
                    <input type="text" name="tag" placeholder="tag">
                </li>
                <li>
                    <input type="file" name="image" accept='image/*'>
                </li>
                <li>
                    <input type="text" name="sub_txt" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="title" placeholder="title">
                </li>
                <li>
                    <textarea type="text" name="main_txt" placeholder="main_text"></textarea>
                </li>
                <li>
                    <textarea type="text" name="main_desc" placeholder="main_desc"></textarea>
                </li>
                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>
        <div class="table table_2">
            <h1>Insert Table 2</h1>

            <form action="insert_table_2.php" method="post" name="eflux_data_2" enctype="multipart/form-data">
                <li>
                    <input type="text" name="tag" placeholder="tag">
                </li>
                <li>
                    <input type="file" name="image" accept='image/*'>
                </li>
                <li>
                    <input type="text" name="sub_txt" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="title" placeholder="title">
                </li>
                <li>
                    <input type="text" name="list" placeholder="title">
                </li>
                <li>
                    <textarea type="text" name="main_txt" placeholder="main_text"></textarea>
                </li>
                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>
        <div class="table table_3">
            <h1>Insert Table 3</h1>

            <form action="insert_table_3.php" method="post" name="eflux_data_3" enctype="multipart/form-data">
                <li>
                    <input type="text" name="tag" placeholder="tag">
                </li>
                <li>
                    <input type="file" name="image" accept='image/*'>
                </li>
                <li>
                    <input type="text" name="sub_txt" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="title" placeholder="title">
                </li>
                <li>
                    <textarea type="text" name="main_txt" placeholder="main_text"></textarea>
                </li>
                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>
        <div class="table table_4">
            <h1>Insert Table 4</h1>

            <form action="insert_table_4.php" method="post" name="eflux_data_3" enctype="multipart/form-data">
                <li>
                    <input type="text" name="tag" placeholder="tag">
                </li>
                <li>
                    <input type="text" name="category" placeholder="category">
                </li>
                <li>
                    <input type="file" name="image" accept='image/*'>
                </li>
                <li>
                    <input type="file" name="image_2" accept='image/*'>
                </li>
                <li>
                    <input type="file" name="image_3" accept='image/*'>
                </li>
                <li>
                    <input type="file" name="image_4" accept='image/*'>
                </li>
                <li>
                    <input type="text" name="sub_txt" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="title" placeholder="title">
                </li>
                <li>
                    <textarea type="text" name="main_txt" placeholder="main_text"></textarea>
                </li>
                <li>
                    <input type="text" name="map" placeholder="map">
                </li>
                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>
        <div class="table table_5">
            <h1>Insert Table 5</h1>

            <form action="insert_table_5.php" method="post" name="eflux_data_3" enctype="multipart/form-data">
                <li>
                    <input type="text" name="tag" placeholder="tag">
                </li>
                <li>
                    <input type="file" name="image" accept='image/*'>
                </li>
                <li>
                    <input type="text" name="sub_txt" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="title" placeholder="title">
                </li>
                <li>
                    <textarea type="text" name="main_txt" placeholder="main_text"></textarea>
                </li>
                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>

    </div>


</body>

</html>