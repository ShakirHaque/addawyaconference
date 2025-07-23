<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>তথ্য জমা দেওয়ার ফর্ম</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables for consistent theming */
        :root {
            --primary: #2563eb;       /* Tailwind blue-700 */
            --primary-dark: #1d4ed8;  /* Tailwind blue-800 */
            --secondary-accent: #6b46c1; /* Tailwind purple-700 */
            --success: #10b981;        /* Tailwind emerald-500 */
            --success-dark: #059669;  /* Tailwind emerald-600 */
            --danger: #dc2626;         /* Tailwind red-600 */
            --danger-light: #fee2e2;   /* Tailwind red-100 */
            --text-dark: #1e293b;      /* Tailwind slate-800 */
            --text-medium: #475569;    /* Tailwind slate-600 */
            --text-light: #64748b;     /* Tailwind slate-500 */
            --bg-light: #f9fafc;       /* Tailwind gray-50 */
            --bg-medium: #f1f5f9;      /* Tailwind gray-100 */
            --border-light: #e2e8f0;   /* Tailwind gray-200 */
            --shadow-light: rgba(0, 0, 0, 0.03);
            --shadow-medium: rgba(0, 0, 0, 0.12);
        }

        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body and overall layout */
        body {
            font-family: 'Poppins', 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-medium) 0%, var(--bg-light) 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem; /* Adjusted for mobile */
            color: var(--text-medium);
            line-height: 1.6;
        }

        /* Main container */
        .container {
            width: 100%;
            max-width: 450px; /* Max-width for mobile-first approach */
            background: #ffffff;
            border-radius: 1rem; /* Slightly smaller border-radius for mobile */
            box-shadow: 0 0.5rem 1.5rem var(--shadow-medium); /* Adjusted shadow */
            overflow: hidden;
            position: relative;
        }

        /* Header styling */
        .header {
            background: linear-gradient(120deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: white;
            padding: 1.5rem 1rem; /* Adjusted padding */
            text-align: center;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .header::before, .header::after { /* Simplified background elements */
            content: "";
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            opacity: 0.5;
        }
        .header::before {
            top: -3rem; right: -3rem;
            width: 8rem; height: 8rem;
        }
        .header::after {
            bottom: -5rem; left: -3rem;
            width: 10rem; height: 10rem;
        }
        .logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.4rem; /* Smaller logo font size */
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            font-weight: 700;
        }
        .logo i {
            background: rgba(255, 255, 255, 0.2);
            width: 2.5rem; /* Smaller icon size */
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem; /* Smaller icon font size */
        }
        .header h1 {
            font-size: 1.8rem; /* Smaller heading for mobile */
            margin-bottom: 0.5rem;
            font-weight: 700;
            line-height: 1.2;
        }
        .subtitle {
            font-size: 0.9rem; /* Smaller subtitle */
            opacity: 0.9;
            max-width: 90%;
            margin: 0 auto;
        }

        /* Main content area (for the form itself) */
        .content {
            padding: 1.5rem; /* Adjusted padding */
        }

        /* Form actual styling */
        .form-area {
            background: var(--bg-light);
            border-radius: 0.8rem; /* Adjusted border-radius */
            padding: 1.5rem; /* Adjusted padding */
            box-shadow: 0 0.3rem 0.8rem var(--shadow-light); /* Adjusted shadow */
            position: relative;
            border: 1px solid var(--border-light);
        }

        /* Form header within form-area */
        .form-header {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 1.2rem; /* Adjusted margin */
            color: var(--primary-dark);
        }
        .form-header i {
            font-size: 1.2rem; /* Adjusted icon size */
        }
        .form-header h2 {
            font-size: 1.3rem; /* Adjusted heading size */
            font-weight: 600;
            color: var(--text-dark);
        }

        /* Form group (label + input) spacing */
        .form-group {
            margin-bottom: 1.2rem; /* Adjusted margin */
        }

        /* Label styling within form */
        label {
            display: block;
            margin-bottom: 0.5rem; /* Adjusted margin */
            font-weight: 500;
            color: var(--text-dark);
            font-size: 0.9rem; /* Adjusted font size */
        }
        label i { /* Icon within label */
            color: var(--primary);
            margin-right: 0.3rem;
        }

        /* Input and select common styles */
        input[type="text"],
        input[type="tel"],
        input[type="number"],
        select {
            width: 100%;
            padding: 0.8rem 1rem; /* Adjusted padding */
            border: 1px solid var(--border-light);
            border-radius: 0.6rem; /* Adjusted border-radius */
            font-size: 0.9rem; /* Adjusted font size */
            transition: all 0.3s ease;
            background: #fff;
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
        }

        input[type="text"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 0.15rem rgba(59, 130, 246, 0.2); /* Adjusted shadow */
            background: #fff;
        }

        /* Submit Button styling */
        button[type="submit"] {
            background: linear-gradient(120deg, var(--success) 0%, var(--success-dark) 100%);
            color: white;
            border: none;
            border-radius: 0.6rem; /* Adjusted border-radius */
            padding: 0.9rem; /* Adjusted padding */
            font-size: 1rem; /* Adjusted font size */
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            box-shadow: 0 0.3rem 0.8rem rgba(16, 185, 129, 0.3);
            font-family: 'Inter', sans-serif;
        }
        button[type="submit"]:hover:not(:disabled) {
            transform: translateY(-0.15rem); /* Adjusted transform */
            box-shadow: 0 0.4rem 1rem rgba(16, 185, 129, 0.4);
        }
        button[type="submit"]:active:not(:disabled) {
            transform: translateY(0);
        }
        button[type="submit"]:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            background: linear-gradient(120deg, var(--text-light) 0%, var(--text-medium) 100%);
            box-shadow: none;
            transform: none;
        }

        /* Features section */
        .features {
            margin-top: 1.5rem; /* Adjusted margin */
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-light);
        }
        .features h3 {
            font-size: 1rem; /* Adjusted font size */
            margin-bottom: 0.8rem;
            color: var(--text-dark);
            font-weight: 600;
        }
        .feature-list {
            list-style: none;
        }
        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            margin-bottom: 0.6rem;
            font-size: 0.85rem; /* Adjusted font size */
            color: var(--text-medium);
        }
        .feature-list i {
            color: var(--success);
            margin-top: 0.15rem;
        }

        /* Footer styling */
        .footer {
            background: var(--bg-medium);
            padding: 1.2rem 1rem; /* Adjusted padding */
            text-align: center;
            border-top: 1px solid var(--border-light);
            font-size: 0.8rem; /* Adjusted font size */
            color: var(--text-light);
        }
        .footer p {
            margin-bottom: 0.3rem;
        }
        .contact-info {
            display: flex;
            flex-direction: column; /* Stack contact items vertically */
            justify-content: center;
            gap: 0.8rem; /* Adjusted gap */
            margin-top: 0.8rem;
        }
        .contact-item {
            display: flex;
            align-items: center;
            justify-content: center; /* Center items for better mobile display */
            gap: 0.4rem;
        }
        .contact-item i {
            color: var(--primary);
        }

        /* Message Box (Pop-up) styles */
        .message-box {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
            padding: 1rem; /* Add padding for small screens */
        }
        .message-box.show {
            opacity: 1;
            display: flex;
        }
        .message-content {
            background-color: #ffffff;
            padding: 1.5rem; /* Adjusted padding */
            border-radius: 0.8rem; /* Adjusted border-radius */
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 90%; /* Responsive width */
            width: 100%;
            transform: scale(0.9);
            transition: transform 0.3s ease;
            position: relative;
        }
        .message-box.show .message-content {
            transform: scale(1);
        }
        .message-content h3 {
            font-size: 1.6rem; /* Adjusted font size */
            margin-bottom: 0.8rem;
            color: var(--primary-dark);
            font-weight: 700;
        }
        .message-content p {
            font-size: 0.95rem; /* Adjusted font size */
            color: var(--text-medium);
            margin-bottom: 1rem; /* Adjusted margin */
        }
        .message-content button {
            background: linear-gradient(to right, var(--primary), var(--primary-dark));
            color: #ffffff;
            padding: 0.7rem 1.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            width: auto;
            min-width: 6rem; /* Smaller min-width */
            box-shadow: 0 0.3rem 0.8rem rgba(99, 102, 241, 0.3);
            border: none;
            font-weight: 600;
        }
        .message-content button:hover {
            background: linear-gradient(to right, var(--primary-dark), var(--primary));
            transform: translateY(-0.1rem);
            box-shadow: 0 0.4rem 1rem rgba(99, 102, 241, 0.4);
        }

        /* Loading Overlay styles */
        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            z-index: 999;
            border-radius: 1rem; /* Match container border-radius */
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0s 0.3s;
        }
        .loading-overlay.show {
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease, visibility 0s 0s;
        }
        .spinner {
            border: 0.35rem solid var(--border-light);
            border-top: 0.35rem solid var(--primary);
            border-radius: 50%;
            width: 3.5rem; /* Smaller spinner */
            height: 3.5rem;
            animation: spin 0.8s linear infinite;
        }
        .loading-text {
            margin-top: 1rem;
            font-size: 1.1rem; /* Adjusted font size */
            font-weight: 700;
            color: var(--text-medium);
            letter-spacing: 0.05em;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive adjustments (further refinements for smaller screens if needed, but primary focus is max-width) */
        @media (max-width: 480px) {
            body {
                padding: 0.5rem;
            }
            .container {
                border-radius: 0.8rem;
                box-shadow: 0 0.3rem 1rem rgba(0, 0, 0, 0.1);
            }
            .header {
                padding: 1.2rem 0.8rem;
            }
            .logo {
                font-size: 1.2rem;
            }
            .logo i {
                width: 2rem;
                height: 2rem;
                font-size: 1rem;
            }
            .header h1 {
                font-size: 1.5rem;
            }
            .subtitle {
                font-size: 0.85rem;
            }
            .content {
                padding: 1rem;
            }
            .form-area {
                padding: 1rem;
            }
            .form-header h2 {
                font-size: 1.1rem;
            }
            label {
                font-size: 0.85rem;
            }
            input[type="text"],
            input[type="tel"],
            input[type="number"],
            select {
                padding: 0.7rem 0.8rem;
                font-size: 0.85rem;
                border-radius: 0.5rem;
            }
            button[type="submit"] {
                padding: 0.8rem 1.2rem;
                font-size: 0.95rem;
                border-radius: 0.5rem;
            }
            .features {
                margin-top: 1rem;
                padding-top: 1rem;
            }
            .features h3 {
                font-size: 0.95rem;
            }
            .feature-list li {
                font-size: 0.8rem;
            }
            .message-content {
                padding: 1.2rem;
                border-radius: 0.7rem;
            }
            .message-content h3 {
                font-size: 1.4rem;
            }
            .message-content p {
                font-size: 0.9rem;
            }
            .message-content button {
                padding: 0.6rem 1.2rem;
                font-size: 0.85rem;
            }
            .loading-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <i class="fas fa-mosque"></i>
                <span>আদ-দাওয়াহ ইসলামী পাঠাগার</span>
            </div>
            <h1>কাপাসিয়া কনফারেন্স রেজিস্ট্রেশন</h1>
            <p class="subtitle">আপনার তথ্য জমা দিয়ে অনলাইন টিকিট তৈরি করুন</p>
        </div>
        
        <div class="content">
            <div class="form-area">
                <div class="form-header">
                    <i class="fas fa-user-edit"></i>
                    <h2>ব্যক্তিগত তথ্য</h2>
                </div>
                
                <form id="dataForm">
                    <div class="form-group">
                        <label for="name"><i class="fas fa-user"></i> আপনার নাম:</label>
                        <input type="text" id="name" name="Name" placeholder="আপনার পুরো নাম লিখুন" required>
                    </div>

                    <div class="form-group">
                        <label for="age"><i class="fas fa-calendar"></i> আপনার বয়স:</label> 
                        <input type="number" id="age" name="Age" placeholder="আপনার বয়স লিখুন" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="gender"><i class="fas fa-venus-mars"></i> লিঙ্গ নির্বাচন করুন:</label>
                        <select id="gender" name="Gender" required>
                            <option value="">নির্বাচন করুন</option>
                            <option value="পুরুষ">পুরুষ</option>
                            <option value="মহিলা">মহিলা</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber"><i class="fas fa-phone"></i> আপনার ফোন নম্বর:</label>
                        <input type="tel" id="phoneNumber" name="PhoneNumber" placeholder="১১ ডিজিটের ফোন নম্বর লিখুন" pattern="[0-9]{11}" title="দয়া করে ১১ ডিজিটের ফোন নম্বর দিন" required>
                    </div>
                    
                    <div class="form-header" style="margin-top: 1.5rem;">
                        <i class="fas fa-map-marker-alt"></i>
                        <h2>ঠিকানা</h2>
                    </div>
                    
                    <div class="form-group">
                        <label for="division"><i class="fas fa-map"></i> বিভাগ নির্বাচন করুন:</label>
                        <select id="division" name="Division">
                            <option value="">নির্বাচন করুন</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="district"><i class="fas fa-map-pin"></i> জেলা নির্বাচন করুন:</label>
                        <select id="district" name="District" disabled>
                            <option value="">প্রথমে বিভাগ নির্বাচন করুন</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="thana"><i class="fas fa-location-dot"></i> উপজেলা/থানা নির্বাচন করুন:</label>
                        <select id="thana" name="Thana" disabled>
                            <option value="">প্রথমে জেলা নির্বাচন করুন</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="village"><i class="fas fa-home"></i> গ্রাম/ঠিকানা লিখুন:</label>
                        <input type="text" id="village" name="Village" placeholder="আপনার গ্রাম বা ঠিকানা লিখুন" required>
                    </div>
                    
                    <div class="form-header" style="margin-top: 1.5rem;">
                        <i class="fas fa-money-bill-wave"></i>
                        <h2>পেমেন্ট তথ্য</h2>
                    </div>
                    
                    <div class="form-group">
                        <label for="paymentMethod"><i class="fas fa-wallet"></i> টাকা পাঠানোর মাধ্যম:</label>
                        <select id="paymentMethod" name="PaymentMethod">
                            <option value="">নির্বাচন করুন</option>
                            <option value="Bkash">বিকাশ</option>
                            <option value="Rocket">রকেট</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="senderNumber"><i class="fas fa-mobile"></i> যে নম্বর থেকে টাকা পাঠিয়েছেন:</label>
                        <input type="tel" id="senderNumber" name="SenderNumber" placeholder="যে নম্বর থেকে টাকা পাঠিয়েছেন" pattern="[0-9]{11}" title="দয়া করে ১১ ডিজিটের ফোন নম্বর দিন" required>
                    </div>

                    <div class="form-group">
                        <label for="trxId"><i class="fas fa-receipt"></i> ট্রান্সেকশন আইডি (TrxID):</label>
                        <input type="text" id="trxId" name="TrxID" placeholder="আপনার ট্রান্সেকশন আইডি লিখুন" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="volunteer"><i class="fas fa-hands-helping"></i> আপনি কি আমাদের প্রোগ্রামে স্বেচ্ছাসেবক হতে আগ্রহী?</label>
                        <select id="volunteer" name="Volunteer" required>
                            <option value="">নির্বাচন করুন</option>
                            <option value="হ্যাঁ">হ্যাঁ</option>
                            <option value="না">না</option>
                        </select>
                    </div>
                    
                    <input type="hidden" id="userId" name="UserID">
                    <input type="hidden" id="status" name="Status" value="1">

                    <button type="submit" class="search-btn">
                        <i class="fas fa-paper-plane"></i>
                        তথ্য জমা দিন
                    </button>
                </form>
                
                <div class="features">
                    <h3>আমাদের সেবা সম্পর্কে</h3>
                    <ul class="feature-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>২৪ ঘন্টার মধ্যে প্রবেশ টিকিট প্রাপ্তি</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>যেকোনো সমস্যায় সাহায্য</span>
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <span>নিরাপদ ও সুরক্ষিত তথ্য সংরক্ষণ</span>
                        </li>
                    </ul>
                </div>

                <div id="loadingOverlay" class="loading-overlay hidden">
                    <div class="spinner"></div>
                    <p class="loading-text">ডেটা জমা দেওয়া হচ্ছে...</p>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>© ২০২৩ আদ-দাওয়াহ ইসলামী পাঠাগার। সর্বস্বত্ব সংরক্ষিত।</p>
            <p>যেকোনো সাহায্যের জন্য আমাদের সাথে যোগাযোগ করুন:</p>
            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>+৮৮ ০১৮৪৩-৯৪৯৫৩০</span>
                </div>
                <div class="contact-item">
                    <i class="fab fa-facebook"></i>
                    <span>facebook.com/addawha</span>
                </div>
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>কাপাসিয়া, গাজীপুর</span>
                </div>
            </div>
        </div>
    </div>

    <div id="messageBox" class="message-box">
        <div class="message-content">
            <h3 id="messageTitle">সফলভাবে জমা হয়েছে!</h3>
            <p id="messageText">আপনার তথ্য গ্রহণ করা হলো। আপনার ইউজার আইডি: <span style="font-weight: bold; color: var(--primary);">addawha123</span>। এই ইউজার আইডিটি স্ক্রিনশট দিয়ে রাখুন বা মনে রাখবেন। ২৪ ঘণ্টার মধ্যে আপনার সিরিয়াল নম্বর এবং প্রবেশ টিকিট দেওয়া হবে।</p>
            <button id="closeMessageBox">বন্ধ করুন</button>
        </div>
    </div>

    <script>
        // Data for Divisions, Districts, and Thanas (More comprehensive data)
        const geoData = {
            "ঢাকা": {
                "ঢাকা": ["আদাবর", "উত্তরা পশ্চিম", "উত্তরা পূর্ব", "যাত্রাবাড়ী", "গুলশান", "ধানমন্ডি", "মোহাম্মদপুর", "মতিঝিল", "রমনা", "তেজগাঁও", "লালবাগ", "শেরেবাংলা নগর", "বাড্ডা", "ভাটারা", "কাফরুল", "ক্যান্টনমেন্ট", "খুলশী", "ডেমরা", "ওয়ারী", "শাহবাগ", "পল্টন", "কলাবাগান", "মিরপুর মডেল", "দারুস সালাম", "শাহ আলী", "পল্লবী", "রূপনগর", "ভাষানটেক", "বনানী", "তেজগাঁও শিল্পাঞ্চল"],
                "গাজীপুর": ["গাজীপুর সদর", "কালিয়াকৈর", "কাপাসিয়া", "কালীগঞ্জ", "শ্রীপুর", "টঙ্গী"],
                "মানিকগঞ্জ": ["মানিকগঞ্জ সদর", "সিংগাইর", "দৌলতপুর", "সাটুরিয়া", "হরিরামপুর", "শিবালয়", "ঘিওর"],
                "নারায়ণগঞ্জ": ["নারায়ণগঞ্জ সদর", "আড়াইহাজার", "ফতুল্লা", "সোনারগাঁও", "রূপগঞ্জ", "সিদ্ধিরগঞ্জ", "বন্দর"],
                "নরসিংদী": ["নরসিংদী সদর", "বেলাবো", "পলাশ", "শিবপুর", "মনোহরদী", "রায়পুরা"],
                "ফরিদপুর": ["ফরিদপুর সদর", "বোয়ালমারী", "চরভদ্রাসন", "মধুখালী", "সদরপুর", "সালথা", "ভাঙ্গা", "নাগরাকান্দা", "আলফাডাঙ্গা"],
                "টাঙ্গাইল": ["টাঙ্গাইল সদর", "ঘাটাইল", "কালিহাতী", "মির্জাপুর", "ভূঞাপুর", "গোপালপুর", "বাসাইল", "নাগরপুর", "সখিপুর", "দেলদুয়ার", "মধুপুর", "ধনবাড়ী"],
                "মুন্সিগঞ্জ": ["মুন্সিগঞ্জ সদর", "লৌহজং", "গজারিয়া", "শ্রীনগর", "সিরাজদিখান", "টংগিবাড়ী"],
                "শরীয়তপুর": ["শরীয়তপুর সদর", "নড়িয়া", "জাজিরা", "গোসাইরহাট", "ভেদরগঞ্জ", "ডামুড্যা"],
                "রাজবাড়ী": ["রাজবাড়ী সদর", "পাংশা", "বালিয়াকান্দি", "গোয়ালন্দ", "কালুখালী"],
                "গোপালগঞ্জ": ["গোপালগঞ্জ সদর", "টুঙ্গিপাড়া", "কোটালিপাড়া", "মুকসুদপুর", "কাশিয়ানী"]
            },
            "চট্টগ্রাম": {
                "চট্টগ্রাম": ["চট্টগ্রাম সদর", "পটিয়া", "সীতাকুণ্ড", "ফটিকছড়ি", "বাঁশখালী", "আনোয়ারা", "চন্দনাইশ", "লোহাগাড়া", "সন্দ্বীপ", "মিরসরাই", "রাউজান", "রাঙ্গুনিয়া", "সাতকানিয়া", "হাটহাজারী", "বোয়ালখালী", "কর্ণফুলী"],
                "কক্সবাজার": ["কক্সবাজার সদর", "উখিয়া", "টেকনাফ", "মহেশখালী", "কুতুবদিয়া", "চকরিয়া", "পেকুয়া", "রামু"],
                "কুমিল্লা": ["কুমিল্লা সদর দক্ষিণ", "কুমিল্লা আদর্শ সদর", "বরুড়া", "চান্দিনা", "লাকসাম", "দাউদকান্দি", "বুড়িচং", "ব্রাহ্মণপাড়া", "দেবীদ্বার", "হোমনা", "মুরাদনগর", "নাঙ্গলকোটে", "তিতাস", "মনোহরগঞ্জ", "মেঘনা", "লালমাই"],
                "ব্রাহ্মণবাড়িয়া": ["ব্রাহ্মণবাড়িয়া সদর", "আশুগঞ্জ", "নাসিরনগর", "কসবা", "আখাউড়া", "নবীনগর", "বাঞ্ছারামপুর", "সরাইল", "বিজয়নগর"],
                "চাঁদপুর": ["চাঁদপুর সদর", "হাজীগঞ্জ", "শাহরাস্তি", "ফরিদগঞ্জ", "কচুয়া", "মতলব উত্তর", "মতলব দক্ষিণ", "হাইমচর"],
                "নোয়াখালী": ["নোয়াখালী সদর", "হাতিয়া", "সেনবাগ", "চাটখিল", "বেগমগঞ্জ", "কমলনগর", "কবিরহাট", "সুবর্ণচর", " কোম্পানীগঞ্জ"],
                "ফেনী": ["ফেনী সদর", "দাগনভূঞা", "ছাগলনাইয়া", "পরশুরাম", "ফুলগাজী", "সোনাগাজী"],
                "লক্ষ্মীপুর": ["লক্ষ্মীপুর সদর", "রায়পুর", "রামগঞ্জ", "কমলনগর", "রামগতি"],
                "বান্দরবান": ["বান্দরবান সদর", "রুমা", "থানচি", "আলীকদম", "নাইক্ষ্যংছড়ি", "লামা", "রোয়াংছড়ি"],
                "খাগড়াছড়ি": ["খাগড়াছড়ি সদর", "দীঘিনালা", "মাটিরাঙ্গা", "পানছড়ি", "লক্ষ্মীছড়ি", "মহালছড়ি", "মানিকছড়ি", "রামগড়", "গুইমারা"],
                "রাঙ্গামাটি": ["রাঙ্গামাটি সদর", "কাপ্তাই", "বাঘাইছড়ি", "বরকল", "জুরাছড়ি", "লংগদু", "নানিয়ারচর", "রাজস্থলী", "কাউখালী", "বিলাইছড়ি"]
            },
            "রাজশাহী": {
                "রাজশাহী": ["রাজশাহী সদর", "বাগমারা", "চারঘাট", "দুর্গাপুর", "পুঠিয়া", "বাঘা", "পবা", "মোহনপুর", "গোদাগাড়ী"],
                "বগুড়া": ["বগুড়া সদর", "শেরপুর", "ধুনট", "নন্দীগ্রাম", "আদমদীঘি", "কাহালু", "গাবতলী", "শিবগঞ্জ", "সোনাতলা", "সারিয়াকান্দি", "দুপচাঁচিয়া", "বগুড়া সদর"],
                "চাঁপাইনবাবগঞ্জ": ["চাঁপাইনবাবগঞ্জ সদর", "শিবগঞ্জ", "গোমস্তাপুর", "নাচোল", "ভোলাহাট"],
                "নওগাঁ": ["নওগাঁ সদর", "আত্রাই", "মান্দা", "নিয়ামতপুর", "বদলগাছী", "ধামইরহাট", "মহাদেবপুর", "পত্মীতলা", "পোরশা", "রানীনগর", "সাপাহার"],
                "নাটোর": ["নাটোর সদর", "লালপুর", "গুরুদাসপুর", "বড়াইগ্রাম", "সিংড়া", "বাগাতিপাড়া", "নলডাঙ্গা"],
                "পাবনা": ["পাবনা সদর", " ঈশ্বরদী", "আটঘরিয়া", "চাটমোহর", "ফরিদপুর", "সুজানগর", "বেড়া", "ভাঙুরা", "সাঁথিয়া"],
                "সিরাজগঞ্জ": ["সিরাজগঞ্জ সদর", "বেলকুচি", "চৌহালী", "কাজিপুর", "রায়গঞ্জ", "শাহজাদপুর", "তারাস", "উল্লাপাড়া"],
                "জয়পুরহাট": ["জয়পুরহাট সদর", "কালাই", "পাঁচবিবি", "ক্ষেতলাল", "আক্কেলপুর"]
            },
            "খুলনা": {
                "খুলনা": ["খুলনা সদর", "বাগেরহাট", "দাকোপ", "ডুমুরিয়া", "কয়রা", "পাইকগাছা", "ফুলতলা", "রূপসা", "দিঘলিয়া", "বটিয়াঘাটা"],
                "বাগেরহাট": ["বাগেরহাট সদর", "মোরেলগঞ্জ", "শরণখোলা", "ফকিরহাট", "মোল্লাহাট", "চিতলমারী", "কচুয়া", "রামপাল", "মোংলা"],
                "সাতক্ষীরা": ["সাতক্ষীরা সদর", "দেবহাটা", "কালিগঞ্জ", "শ্যামনগর", "আশাশুনি", "তালা", "কলারোয়া"],
                "যশোর": ["যশোর সদর", "অভয়নগর", "ঝিকরগাছা", "মনিরামপুর", "কেশবপুর", "চৌগাছা", "শার্শা", "বাঘারপাড়া"],
                "কুষ্টিয়া": ["কুষ্টিয়া সদর", "ভেড়ামারা", "কুমারখালী", "খোকসা", "দৌলতপুর", "মিরপুর"],
                "মেহেরপুর": ["মেহেরপুর সদর", "গাংনী", "মুজিবনগর"],
                "চুয়াডাঙ্গা": ["চুয়াডাঙ্গা সদর", "আলমডাঙ্গা", "দামুড়হুদা", "জীবননগর"],
                "মাগুরা": ["মাগুরা সদর", "শালিখা", "শ্রীপুর", "মহম্মদপুর"],
                "ঝিনাইদহ": ["ঝিনাইদহ সদর", "শৈলকুপা", "কালীগঞ্জ", "কোটচাঁদপুর", "মহেশপুর", "হরিণাকুণ্ডু"],
                "নড়াইল": ["নড়াইল সদর", "লোহাগড়া", "কালিয়া"]
            },
            "বরিশাল": {
                "বরগুনা": ["বরগুনা সদর", "পাথরঘাটা", "আমতলী", "বেতাগী", "বামনা", "তালতলী"],
                "বরিশাল": ["বরিশাল সদর", "বাবুগঞ্জ", "গৌরনদী", "উজিরপুর", "বানারীপাড়া", "বাকেরগঞ্জ", "মেহেন্দিগঞ্জ", "মুলাদী", "হিজলা", "আগৈলঝাড়া"],
                "ভোলা": ["ভোলা সদর", "বোরহানউদ্দিন", "দৌলতখান", "লালমোহন", "তজুমদ্দিন", "মনপুরা", "চরফ্যাশন"],
                "ঝালকাঠি": ["ঝালকাঠি সদর", "নলছিটি", "রাজাপুর", "কাঁঠালিয়া"],
                "পটুয়াখালী": ["পটুয়াখালী সদর", "বাউফল", "কলাপাড়া", "দশমিনা", "গলাচিপা", "মির্জাগঞ্জ", "রাঙ্গাবালী", "দুমকি"],
                "পিরোজপুর": ["পিরোজপুর সদর", "ভাণ্ডারিয়া", "নেছারাবাদ (স্বরূপকাঠি)", "মঠবাড়িয়া", "কাউখালী", "নাজিরপুর", "ইন্দুরকানি"]
            },
            "সিলেট": {
                "সিলেট": ["সিলেট সদর", "গোলাপগঞ্জ", "ফেঞ্চুগঞ্জ", "জকিগঞ্জ", "কানাইঘাট", "বালাগঞ্জ", "বিয়ানীবাজার", "বিশ্বনাথ", "কোম্পানীগঞ্জ", "গোয়াইনঘাট", "জয়ন্তিয়াপুর", "দক্ষিণ সুরমা"],
                "সুনামগঞ্জ": ["সুনামগঞ্জ সদর", "ছাতক", "দিরাই", "শাল্লা", "দোয়ারাবাজার", "জগন্নাথপুর", "ধর্মপাশা", "তাহিরপুর", "জামালগঞ্জ", "বিশ্বম্ভরপুর", "দক্ষিণ সুনামগঞ্জ"],
                "মৌলভীবাজার": ["মৌলভীবাজার সদর", "কমলগঞ্জ", "কুলাউড়া", "বড়লেখা", "রাজনগর", "শ্রীমঙ্গল", "জুড়ী"],
                "হবিগঞ্জ": ["হবিগঞ্জ সদর", "চুনারুঘাট", "মাধবপুর", "নবীগঞ্জ", "বাহুবল", "আজমিরীগঞ্জ", "বানিয়াচং", "লাখাই"]
            },
            "রংপুর": {
                "রংপুর": ["রংপুর সদর", "বদরগঞ্জ", "পীরগঞ্জ", "কাউনিয়া", "গঙ্গাচড়া", "তারাগঞ্জ", "মিঠাপুকুর", "পীরগাছা"],
                "দিনাজপুর": ["দিনাজপুর সদর", "বিরামপুর", "পার্বতীপুর", "খানসামা", "চিরিরবন্দর", "ফুলেশবাড়ী", "ঘোড়াঘাট", "হাকিমপুর", "কাহারোল", "নবাবগঞ্জ", "বীরগঞ্জ", "বোচাগঞ্জ"],
                "কুড়িগ্রাম": ["কুড়িগ্রাম সদর", "উলিপুর", "চিলমারী", "ভূরুঙ্গামারী", "নাগেশ্বরী", "রাজারহাট", "রৌমারী", "ফুলবাড়ী", "চর রাজিবপুর"],
                "গাইবান্ধা": ["গাইবান্ধা সদর", "পলাশবাড়ী", "সাদুল্লাপুর", "গোবিন্দগঞ্জ", "সুন্দরগঞ্জ", "সাঘাটা", "ফুলছড়ি"],
                "নীলফামারী": [" নীলফামারী সদর", "ডোমার", "সৈয়দপুর", "কিশোরগঞ্জ", "জলঢাকা", "ডিমলা"],
                "পঞ্চগড়": ["পঞ্চগড় সদর", "দেবীগঞ্জ", "তেঁতুলিয়া", "আটোয়ারী", "বোদা"],
                "ঠাকুরগাঁও": ["ঠাকুরগাঁও সদর", "পীরগঞ্জ", "রানীশংকৈল", "বালিয়াডাঙ্গী", "হরিপুর"],
                "লালমনিরহাট": ["লালমনিরহাট সদর", "আদিতমারী", "হাতীবান্ধা", "পাটগ্রাম", "কালীগঞ্জ"]
            },
            "ময়মনসিংহ": {
                "ময়মনসিংহ": ["ময়মনসিংহ সদর", "মুক্তাগাছা", "ভালুকা", "গৌরীপুর", "ত্রিশাল", "ঈশ্বরগঞ্জ", "ফুলবাড়িয়া", "ধোবাউড়া", "হালুয়াঘাট", "ফুলপুর", "তারাকান্দা", "নান্দাইল"],
                "কিশোরগঞ্জ": ["কিশোরগঞ্জ সদর", "ভৈরব", "হোসেনপুর", "তাড়াইল", "করিমগঞ্জ", "কাটিয়াদী", "পাকুন্দিয়া", "কুলিয়ারচর", "বাজিতপুর", "মিঠামইন", "অষ্টগ্রাম", "নিকলী", "ইটনা"],
                "নেত্রকোনা": ["নেত্রকোণা সদর", "কেন্দুয়া", "মদন", "পূর্বধলা", "আটপাড়া", "বারহাট্টা", "কলমাকান্দা", "মোহনগঞ্জ", "দুর্গাপুর", "খালিয়াজুরী"],
                "শেরপুর": ["শেরপুর সদর", "নালিতাবাড়ী", "শ্রীবরদী", "ঝিনাইগাতী", "নকলা"]
            }
        };

        const divisionSelect = document.getElementById('division');
        const districtSelect = document.getElementById('district');
        const thanaSelect = document.getElementById('thana');
        const dataForm = document.querySelector('.form-area form');
        const userIdInput = document.getElementById('userId');
        const statusInput = document.getElementById('status');
        const messageBox = document.getElementById('messageBox');
        const messageTitle = document.getElementById('messageTitle');
        const messageText = document.getElementById('messageText');
        const closeMessageBoxButton = document.getElementById('closeMessageBox');
        const phoneNumberInput = document.getElementById('phoneNumber');
        const loadingOverlay = document.getElementById('loadingOverlay');

        // Function to populate divisions
        function populateDivisions() {
            for (const division in geoData) {
                const option = document.createElement('option');
                option.value = division;
                option.textContent = division;
                divisionSelect.appendChild(option);
            }
        }

        // Function to populate districts based on selected division
        function populateDistricts() {
            districtSelect.innerHTML = '<option value="">নির্বাচন করুন</option>';
            thanaSelect.innerHTML = '<option value="">প্রথমে বিভাগ নির্বাচন করুন</option>';
            districtSelect.disabled = true;
            thanaSelect.disabled = true;

            const selectedDivision = divisionSelect.value;
            if (selectedDivision && geoData[selectedDivision]) {
                // If the selected division has districts as a direct array (like "বরিশাল")
                if (Array.isArray(geoData[selectedDivision])) {
                    geoData[selectedDivision].forEach(district => {
                        const option = document.createElement('option');
                        option.value = district;
                        option.textContent = district;
                        districtSelect.appendChild(option);
                    });
                } else { // If districts are nested under a district object
                    for (const district in geoData[selectedDivision]) {
                        const option = document.createElement('option');
                        option.value = district;
                        option.textContent = district;
                        districtSelect.appendChild(option);
                    }
                }
                districtSelect.disabled = false;
            }
        }

        // Function to populate thanas based on selected district
        function populateThanas() {
            thanaSelect.innerHTML = '<option value="">নির্বাচন করুন</option>';
            thanaSelect.disabled = true;

            const selectedDivision = divisionSelect.value;
            const selectedDistrict = districtSelect.value;
            if (selectedDivision && selectedDistrict) {
                // Check if geoData[selectedDivision] is an object containing districts
                if (typeof geoData[selectedDivision] === 'object' && !Array.isArray(geoData[selectedDivision]) && geoData[selectedDivision][selectedDistrict]) {
                    geoData[selectedDivision][selectedDistrict].forEach(thana => {
                        const option = document.createElement('option');
                        option.value = thana;
                        option.textContent = thana;
                        thanaSelect.appendChild(option);
                    });
                    thanaSelect.disabled = false;
                }
                // Handle cases where the district itself contains thanas directly (e.g., if a "division" entry had direct "thana" lists, though current data structure doesn't support this directly for robustness)
            }
        }

        // Generate User ID based on "addawha" and last 3 digits of phone number
        function generateUserId(phoneNumber) {
            if (!phoneNumber || phoneNumber.length < 4) {
                // Fallback to a more robust random string if phone number is too short
                return 'islam-UNKNOWN-' + Math.random().toString(36).substring(2, 8).toUpperCase();
            }
            // Generate a random 3-digit number
            const randomDigits = Math.floor(100 + Math.random() * 900).toString();
            // Get last 4 digits of phone number
            const lastFourDigits = phoneNumber.slice(-4);
            return 'islam-' + lastFourDigits + '-' + randomDigits;
        }

        // Show custom message box (modal)
        function showMessageBox(title, messageHtml, userIdToHighlight = null) {
            messageTitle.textContent = title;
            let finalMessageHtml = messageHtml;
            if (userIdToHighlight) {
                finalMessageHtml = `আপনার তথ্য গ্রহণ করা হলো। আপনার ইউজার আইডি: <span style="font-weight: bold; color: var(--primary);">${userIdToHighlight}</span>। এই ইউজার আইডিটি স্ক্রিনশট দিয়ে রাখুন বা মনে রাখুন। ২৪ ঘণ্টার মধ্যে আপনার তথ্য ভেরিফাই করে প্রবেশ টিকিট অনলাইনে আপডেট করা হবে (প্রবেশ টিকিট বাটনে পেয়ে যাবেন)। তখন লগইন করতে ইউজার <span style="font-weight: bold; color: var(--primary);">${userIdToHighlight}</span> নেমটি লাগবে। `;
            }
            messageText.innerHTML = finalMessageHtml;
            
            messageBox.style.display = 'flex';
            setTimeout(() => {
                messageBox.classList.add('show');
            }, 10);
        }

        // Close custom message box (modal)
        function closeMessageBox() {
            messageBox.classList.remove('show');
            messageBox.addEventListener('transitionend', function handler() {
                messageBox.style.display = 'none';
                messageBox.removeEventListener('transitionend', handler);
            }, { once: true });
        }

        // Event listeners
        divisionSelect.addEventListener('change', populateDistricts);
        districtSelect.addEventListener('change', populateThanas);
        closeMessageBoxButton.addEventListener('click', closeMessageBox);

        // Form submission handler
        dataForm.addEventListener('submit', async function(event) {
            event.preventDefault();
            
            loadingOverlay.classList.add('show');
            
            const phoneNumber = phoneNumberInput.value;
            const userId = generateUserId(phoneNumber);
            userIdInput.value = userId;
            statusInput.value = "1"; // Ensure status is always 1

            const formData = new FormData(dataForm);
            const data = {};
            for (const [key, value] of formData.entries()) {
                data[key] = value;
            }

            let isSubmissionSuccessful = false;

            // Replace with your deployed Google Apps Script Web App URL
            const googleAppsScriptURL = 'https://script.google.com/macros/s/AKfycby6dZJMT4uuT7r4sSKCuQPtlwe_RwB8JbIJj2qX6xF4XfHER0KgaehE9_BsXrLmsWOPDQ/exec'; // *** IMPORTANT: Update this URL ***

            try {
                const response = await fetch(googleAppsScriptURL, {
                    method: 'POST',
                    mode: 'no-cors', // Required for Google Apps Script
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams(data).toString(),
                });

                console.log('ফর্ম জমা দেওয়া হয়েছে। Google Apps Script প্রতিক্রিয়া পরীক্ষা করুন।');
                isSubmissionSuccessful = true;

            } catch (error) {
                console.error('ফর্ম জমা দিতে সমস্যা হয়েছে:', error);
                showMessageBox('ভুল!', 'ফর্ম জমা দিতে সমস্যা হয়েছে। দয়া করে আবার চেষ্টা করুন।', '');
            } finally {
                loadingOverlay.classList.remove('show');
                if (isSubmissionSuccessful) {
                    showMessageBox('ফর্ম সফলভাবে জমা দেওয়া হয়েছে!', '', userId);
                    dataForm.reset(); // Reset form fields
                    // Re-populate dropdowns after reset to default state
                    populateDivisions(); 
                    populateDistricts(); 
                    populateThanas();
                }
            }
        });

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', () => {
            populateDivisions();
            // Initially populate districts and thanas for the default (empty) division
            populateDistricts(); 
            populateThanas();
        });
    </script>
</body>
</html>
