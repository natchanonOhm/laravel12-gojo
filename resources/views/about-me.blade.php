<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Me | ณัฐชนน</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            min-height: 100vh;
            color: #333;
            padding: 40px 20px;
        }

        .wrapper {
            max-width: 900px;
            margin: auto;
        }

        /* Header */
        .header {
            text-align: center;
            color: white;
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 42px;
            margin: 0 0 10px;
        }

        .header p {
            color: #d8e3ef;
            font-size: 18px;
        }

        /* Main Card */
        .card {
            background: rgba(255, 255, 255, 0.96);
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        /* Profile */
        .profile-section {
            display: flex;
            align-items: center;
            gap: 35px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 30px;
        }

        .profile {
            width: 170px;
            height: 170px;
            object-fit: cover;
            border-radius: 25px;
            border: 6px solid #3498db;
            background-color: #eee;
        }

        .profile-info h2 {
            margin: 0 0 10px;
            font-size: 30px;
            color: #1d3557;
        }

        .profile-info p {
            margin: 7px 0;
            font-size: 17px;
            color: #666;
        }

        .student-id {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background: #e8f4ff;
            color: #1671b9;
            border-radius: 20px;
            font-weight: bold;
        }

        /* Works */
        .works {
            margin-top: 30px;
        }

        .works h3 {
            font-size: 25px;
            color: #1d3557;
            margin-bottom: 20px;
        }

        .work-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .work {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 20px;
            background: #f5f7fa;
            border-radius: 15px;
            text-decoration: none;
            color: #333;
            border: 1px solid #e3e7eb;
            transition: 0.25s;
        }

        .work:hover {
            transform: translateY(-4px);
            background: #3498db;
            color: white;
            box-shadow: 0 8px 20px rgba(52, 152, 219, 0.3);
        }

        .work-title {
            font-weight: bold;
        }

        .arrow {
            font-size: 20px;
        }

        /* Login */
        .login-area {
            margin-top: 30px;
            text-align: center;
        }

        .login-btn {
            display: inline-block;
            padding: 13px 35px;
            background: #1d3557;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: 0.25s;
        }

        .login-btn:hover {
            background: #3498db;
            transform: scale(1.05);
        }

        /* Footer */
        .footer {
            text-align: center;
            color: #cbd5e1;
            margin-top: 25px;
            font-size: 14px;
        }

        /* Mobile */
        @media (max-width: 650px) {

            .card {
                padding: 25px;
            }

            .profile-section {
                flex-direction: column;
                text-align: center;
            }

            .work-list {
                grid-template-columns: 1fr;
            }

            .header h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

<div class="wrapper">

    <!-- Header -->
    <div class="header">
        <h1>MY PORTFOLIO</h1>
        <p>Welcome to my personal website</p>
    </div>


    <!-- Main -->
    <div class="card">

        <!-- Profile -->
        <div class="profile-section">

            <img
                 src="{{ asset('images/profile.jpg') }}"
            alt="Profile"
            class="profile"
        >

            <div class="profile-info">

                <h2>นายณัฐชนน บัวเล็ก</h2>

                <p>
                    สาขาวิทยาการคอมพิวเตอร์
                </p>

                <span class="student-id">
                    รหัสนักศึกษา: 68122420030
                </span>

            </div>

        </div>


        <!-- Works -->
        <div class="works">

            <h3>📁 ผลงานของฉัน</h3>

            <div class="work-list">

                <a href="/gallery" class="work">
                    <span class="work-title">
                        EP02 - Hero / Gallery
                    </span>
                    <span class="arrow">→</span>
                </a>

                <a href="/active/index" class="work">
                    <span class="work-title">
                        EP03 - Active Bootstrap
                    </span>
                    <span class="arrow">→</span>
                </a>

                <a href="/weights" class="work">
                    <span class="work-title">
                        EP07 - Weight
                    </span>
                    <span class="arrow">→</span>
                </a>

                <a href="/login" class="work">
                    <span class="work-title">
                        EP08 - Authentication
                    </span>
                    <span class="arrow">→</span>
                </a>

            </div>

        </div>


        <!-- Login -->
        <div class="login-area">

            <a href="/login" class="login-btn">
                🔐 Login
            </a>

        </div>

    </div>


    <div class="footer">
        © 2026 ณัฐชนน บัวเล็ก | My Portfolio
    </div>

</div>

</body>

</html>
