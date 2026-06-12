<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>演習課題：成績判定プログラムの作成</title>
</head>

<body>
    <h1><strong>成績判定システム</strong></h1>
    <h2><strong>【個別成績】</strong></h2>

    <?php
    $students = [
        ["name" => "田中太郎", "score" => 85],
        ["name" => "佐藤花子", "score" => 92],
        ["name" => "鈴木一郎", "score" => 78],
        ["name" => "高橋美咲", "score" => 65],
        ["name" => "伊藤健太", "score" => 58],
    ];
    foreach ($students as $student) {

        $score = $student['score'];

        if ($score >= 90) {
            $grade = 'A(優秀)';

        } elseif ($score >= 80) {
            $grade = 'B(良好)';

        } elseif ($score >= 70) {
            $grade = 'C(普通)';

        } elseif ($score >= 60) {
            $grade = 'D(要努力)';

        } else {
            $grade = 'F(不合格)';
        }
        echo $student['name'] . ": " . $score . "点 - 評価 " . $grade . "<br>";
    }
    ?>

    <h2><strong>【統計情報】</strong></h2>
    <?php
    //合格者数(60点以上)
    //不合格者数(60点未満)
    //平均点
    
    $scores = [85, 92, 78, 65, 58];

    $pass_count = 0;
    $fail_count = 0;

    foreach ($scores as $score) {
        if ($score >= 60) {
            $pass_count++;
        } else {
            $fail_count++;
        }
    }
    $average = array_sum($scores) / count($scores);

    echo "合格者数:" . $pass_count . "人<br>";
    echo "不合格者数:" . $fail_count . "人<br>";
    echo "平均点: " . $average . "点";

    ?>




</body>

</html>