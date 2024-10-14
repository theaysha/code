<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="term.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<nav class="navbar">
        <div class="logo">
            <h1>Shri Hanumat Capital Services Private Limited</h1>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href=" our services.php">Our Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        

        </ul>
        <div class="menu-toggle">&#9776;</div>
    </nav>
    <section>
        <p><h1>Mutual funds are investment vehicles that pool money from many investors to invest in a variety of assets, such as stocks, bonds, or other securities. <br> When investing in mutual funds, it's essential to understand the terms and conditions associated with them.
</h1> <br>
        


<h2>Transparency</h2> <br>

<b>.</b>&nbsp;  Mutual funds are subject to industry regulations that ensure accountability and fairness for investors. <br> <br>
<b>.</b>&nbsp; The component securities of each mutual fund can be found across many platforms. <br> <br>
<h2>Variety of Investment Options</h2><br>

<b>.</b>&nbsp; Mutual funds offer a range of investment options, including value investing, growth investing, developed markets, emerging markets, income, and macroeconomic investing. <br>
<b>.</b>&nbsp; Investors can gain exposure to foreign and domestic investment opportunities that might otherwise be inaccessible. <br><br>
<h2>Cons of Mutual Fund Investing</h2> <br>

<b>.</b>&nbsp; <b>No FDIC Guarantee:</b> Mutual fund investments are not guaranteed by the FDIC, and there is always the possibility that the value of the investment will depreciate. <br><br>
<b>.</b>&nbsp; <b>Cash Drag:</b> Mutual funds require a significant portion of their portfolios to be held in cash to satisfy share redemptions each day, which can result in a "cash drag" on performance. <br><br>
<h2>How Mutual Funds Work</h2> <br>

<b>.</b>&nbsp; Mutual funds are equity investments, similar to individual stocks. <br><br>
<b>.</b>&nbsp; When you buy shares of a mutual fund, you become a part-owner of the fund and share in its profits.  <br>
<h2>Essentials</h2> <br>

<b>.</b>&nbsp; A mutual fund is a type of investment company that pools money from many investors to invest in a range of securities. <br> <br>
<b>.</b>&nbsp; Mutual funds can offer cost-effective diversification.
Each mutual fund has a different investment objective, such as growth, income, or both. <br> <br>
<b>.</b>&nbsp; Mutual funds have fees and expenses, and investors should use FINRA's Fund Analyzer to analyze and compare the costs of owning specific funds. <br> <br>
<b>.</b>&nbsp; A mutual fund may have different share classes with different costs. <br><br>
<h2>Risks</h2> <br>

<b>.</b>&nbsp; <b>Market Risk:</b> Mutual fund performance is based on the performance of their underlying investments, and changing market conditions can impact principal and returns. <br> <br>
<b>.</b>&nbsp; <b>Dilution:</b> Successful funds growing too big can lead to dilution, making it difficult for the manager to find suitable investments for all the new capital. <br> <br>
<b>.</b>&nbsp; <b>End-of-Day Trading Only:</b> Mutual fund redemptions can only take place at the end of the trading day. <br><br>
<b>.</b>&nbsp; <b>Taxes:</b> Mutual fund investments are subject to taxes, and investors should consider the tax implications of their investments. <br><br>

<h2>Fees and Expenses</h2> <br>

<b>.</b>&nbsp; Mutual funds charge annual fees, expense ratios, or commissions, which lower their overall returns. <br><br>
<b>.</b>&nbsp; Investors should be aware of the fees associated with their mutual fund investments. <br><br>
<h2>Share Classes</h2><br>

<b>.</b>&nbsp; Mutual funds have different share classes, such as A-shares, B-shares, and C-shares, each with different fees and expenses. <br><br>
<b>.</b>&nbsp; Investors should understand the fees associated with each share class. <br><br>
<h2>Investor Education</h2> <br><br>

<b>.</b>&nbsp; It's essential for investors to educate themselves on mutual funds, including their investment objectives, risks, and fees. <br><br>
<b>.</b>&nbsp; Investors should read the prospectus and understand the terms and conditions before investing in a mutual fund.

 

</p>
    </section>
    <form id="agreementForm" class="ab" onsubmit="return validateForm()">
        <h3>Please check one of the following:</h3>

        <label>
            <input type="checkbox" id="agree" name="agreement" value="agree" onclick="toggleCheckbox('agree')">
            I Agree
        </label>
        <br>

        <label>
            <input type="checkbox" id="disagree" name="agreement" value="disagree" onclick="toggleCheckbox('disagree')">
            I Disagree
        </label>
        <br><br>

        <input  class="for"type="submit" value="Submit">
        </input>
    </form>

    <script>
        // This function ensures only one checkbox is selected
        function toggleCheckbox(clickedCheckbox) {
            if (clickedCheckbox === 'agree') {
                document.getElementById('disagree').checked = false;
            } else if (clickedCheckbox === 'disagree') {
                document.getElementById('agree').checked = false;
            }
        }

        // Validate that at least one checkbox is selected before submitting the form
        function validateForm() {
            const agree = document.getElementById('agree').checked;
            const disagree = document.getElementById('disagree').checked;

            if (!agree && !disagree) {
                alert("Please select either 'Agree' or 'Disagree'.");
                return false;  // Prevent form submission
            }

            return true;  // Allow form submission
        }

        
    </script>





</body>
</html>