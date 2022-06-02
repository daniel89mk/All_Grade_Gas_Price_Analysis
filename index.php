<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gas Price Analysis</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="hero"></div>
    <style>
      body {
        /* background-image: url('../images/Gas-Station-Price-Signs-Background-Image.png'); */
        /* background-image: url('https://www.movebuddha.com/wp-content/uploads/2022/04/version_01-1.jpg'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('../images/Gas-Station-Price-Signs-Background-Image.png'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://images.pexels.com/photos/3814729/pexels-photo-3814729.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); */
        /* background-image: linear-gradient(to top, rgba(30, 75, 115, 1), rgba(255, 255, 255, 0)), url('https://images.pexels.com/photos/10711711/pexels-photo-10711711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://www.movebuddha.com/wp-content/uploads/2022/04/version_01-1.jpg'); */
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://images.pexels.com/photos/9073185/pexels-photo-9073185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        
        background-size: cover;
        /* background-color: darkslategray; */
        background-color: cadetblue;

      }
    </style>
    </div>
  </body>
    <div class="container">
      <!-- Add Jumbotron to Header -->
      <div style="background-color:grey;" class="jumbotron text-center">
        <h1 style="color: white;">Gas Price Analysis</h1>
        <!-- Add a button to activate scraping script -->
        <!-- <p><a class="btn btn-primary btn-lg" href="/scrape" role="button">Scrape New Data</a></p> -->
        <!-- Add a button to activate scraping script -->
        <p class="lead" style="font-weight:bold">by: THE TWO GASSY GIRLS</p>
        <hr class="my-4">
        <!-- <h style="color:white">LinkedIn Profile : </h> -->
          <img src="https://image.similarpng.com/very-thumbnail/2020/07/Linkedin-logo-on-transparent-Background-PNG-.png" style="width:40px;height:40px;">
          <a class="btn btn-Dark" href="https://www.linkedin.com/in/kimberly-kang-35450b75?trk=profile-badge" style="font-size:120%;color:white">Kimberly Kang</a>
          <a class="btn btn-Dark" href="https://www.linkedin.com/in/phoebemiao/" style="font-size:120%;color:white">Phoebe Miao</a>
          <ul>
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/backhand-index-pointing-right_1f449.png" style="width:40px;height:40px;">
            <li class="btn btn-Dark" href="https://docs.google.com/presentation/d/1XPCqnkOeaemkxZTu8BPxTlwjLJBWvVgrxnUrUHRo_xg/edit#slide=id.gc6f980f91_0_0" style="color:white">Our Presentation in Google Slides</li>
            <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/backhand-index-pointing-right_1f449.png" style="width:40px;height:40px;">
            <li class="btn btn-Dark" href="" style="color:white">Our Presentation in Youtube!</li>
          </ul>
          <p2 style="font-size:100%;color: white;">Python, SQL, Tableau, Web Scraping, and Machine Learning</p2>
      </div>

      <!-- Add section for gas News -->
      <!-- <div class="row" id="gas-news">
        <div class="col-md-12">
          <div class="media">
            <div class="media-body">
              <div class="page-header">
                <h2 style="color:white;font-weight:bold; text-align: center">Latest Gas Price News</h2> -->

              <!-- </div> -->
              <!-- <h4 class="media-heading" style="color:white; text-align: center">{{ gas.news_title }}</h4>
              <p style="color:white; text-align: center">{{ gas.news_paragraph }}</p>
              <p style="color:white; text-align: center">{{ gas.news_link }}</p> -->
            <!-- </div>
          </div>
        </div>
      </div> -->

      <!-- Section for Real Time Gas price table from gasbuddy.com -->
      <!-- <div class="row" id="gas_news">
        <div class="col-md-12">
          <div class="page-header">
            <h2 style="color:white;font-weight:bold; text-align: center">National Average Gas Prices (Real Time)</h2>
          </div> -->
          

        
      <div class="col-md-12">
          <div class="row">
            <div class="page-header" >
              <h1 class="text-center" style="color:white;font-weight:bold">Background</h1>
                <h2 style="color:white; text-align: center">What is Natural Gas?</h2>
            </div>
          </div>
         
          <div class="col-md-7">
            <img src="https://www.eia.gov/energyexplained/natural-gas/images/hydrofracturing_lg.jpg" style="width:600px;height:400px;">
          </div>

          <div class="col-md-5">
            <div class="col-md-12">
              <p style="font-size:140%; color:white;">Natural gas is a fossil energy source that formed deep beneath the earth's surface. Natural gas contains many different compounds. The largest component of natural gas is methane, a compound with one carbon atom and four hydrogen atoms (CH4). Natural gas also contains smaller amounts of natural gas liquids (NGLs, which are also hydrocarbon gas liquids), and nonhydrocarbon gases, such as carbon dioxide and water vapor. We use natural gas as a fuel and to make materials and chemicals.</p>
                <a class="btn btn-Dark" href="https://www.eia.gov/energyexplained/natural-gas/"style="font-size:120%; color:white;">More details: CLICK HERE</a>
            </div>
          </div>
          
          <div class="col-md-12">
            <div class="row">
              <div class="page-header">
                <h1 class="text-center" style="color:white;font-weight:bold">Our Dataset</h1>
                  
              </div>
            </div>
           
            <div class="col-md-12">
              <h2 style="color:white; text-align: center">Summary for our variables</h2>
              <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/ERD.png" style="width:900px;height:700px;"></center>
            </div>
            


            <div class="col-md-12">
              <h2 style="margin-top: 90px;color:white; text-align: center">Summary for our variables</h2>
              <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/var_table.PNG" style="width:900px;height:700px;"></center>
            </div>
  
           

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">Original Factors from Research</h3>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/var_summary_table1.PNG" class = "center"style="width:700px;height:400px;"></center>
          </div> 

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">More Interesting Factors </h3>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/addition_var_summary_table.PNG" class = "center"style="width:700px;height:200px;"></center>
          </div> 

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">More Factors from Consumer Data</h3>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/consumer_var_summary_table.PNG" class = "center"style="width:700px;height:300px;"></center>
          </div> 

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">[ Multiple Regression Model 1 (MRM 1) ]</h3>
            <ul>
              <li style="font-size:120%; color:white;">Factors: year, production, consumption, import_price, export_price, total imports, total exports, gas_price by types(all_grades, regular, midgrade, premium, diesel), volumn(storage).</li>
              <li style="font-size:120%; color:white;">Target: all_grades_price</li>
            </ul>
          </div> 
          
          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">[ Multiple Regression Model 2 (MRM 2) ]</h3>
            <ul>
              <li style="font-size:120%; color:white;">Add additional Factors: inflation, stock_to_GDP, working_population, interest_rate.</li>
              <li style="font-size:120%; color:white;">Target: all_grades_price</li>
            </ul>
          </div> 

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">[ Multiple Regression Model 3 (MRM 3) ]</h3>
            <ul>
              <li style="font-size:120%; color:white;">Drop Dummies Factors: gas_price by types(all_grades, regular, midgrade, premium, diesel)</li>
              <li style="font-size:120%; color:white;">Target: all_grades_price</li>
            </ul>
          </div> 

          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">[ Multiple Regression Model 4 (MRM 4) ]</h3>
            <ul>
              <li style="font-size:120%; color:white;">Add Consumer_types without dummies Factors: all_consumers, consumer_types(commercial_, elecric_, industrial_, residential_, vehicle_consumers)</li>
              <li style="font-size:120%; color:white;">Target: all_grades_price</li>
            </ul>
          </div>
          
          <div class="col-md-12">
            <h3 style="font-size:140%; color:white; text-align: center; font-weight:bold">Measure Metrics with our 4 models</h3>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/Model_evaluation.PNG" class = "center"style="width:700px;height:300px;"></center>
            <ul>
              <li style="font-size:120%; color:white;">R-sqaured Value: Residual squared score that efers to the coefficient of determination. It tells how well the unknoen samples will be predicted by model.(best is 1.0, can be negative)</li>
              <li style="font-size:120%; color:white;">MAE: Mean absolute error; which is the average of absolute errors off all the data points in the given dataset.</li>
              <li style="font-size:120%; color:white;">MSE: Mean squared error; which is the average of the squares of the errors of all the data points in the given dataset.</li>
              <li style="font-size:120%; color:white;">MAE*: Median of all the errors in the given dataset. (it's robust to outliers)</li>
              <li style="font-size:120%; color:white;">EVS: Explained variance score; measures how well out model can account for the variation in the dataset. (1.0 indicatesthat model is perfect.)</li>
            </ul>
          </div> 


      <!-- Section for visualizations -->
    <div class="col-md-12">
      <div class="row">
        <div class="page-header">
          <h2 class="text-center" style="color:white;font-weight:bold">Interesting Factors in Graphs</h2>
          <p style="color:white; text-align: center">Visualization using Tableau and Python</p>
        </div>

        <!-- <div class="row">
          <div class="col-md-8"> -->

          <div class="col-md-6">
            <h3 style="font-size:120%; color:white; text-align: center; font-weight:bold">Price of Import and Export ($/Gallon)</h3>
            <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/import_export_graph.png" class = "center" style="width:580px;height:400px;">
          </div>
            <!-- <div class="thumbnail"> -->
          <div class="col-md-6">
            <div class="col-md-12">
              <h3 style="font-size:120%; color:white; text-align: center;font-weight:bold">Stock Market to GDP(%)</h3>
              <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/stock_market_to_GDP(%25).png" class="center" style="width:580px;height:400px;">
            </div>
          </div>

          <div class="col-md-6">
            <h3 style="font-size:120%; color:white; text-align: center; font-weight:bold">Inflation(%)</h3>
            <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/inflation.png" class = "center" style="width:580px;height:400px;">
          </div>
            <!-- <div class="thumbnail"> -->
          <div class="col-md-6">
            <div class="col-md-12">
              <h3 style="font-size:120%; color:white; text-align: center;font-weight:bold">Interest Rate(%)</h3>
              <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/interest_rate(%25).png" class="center" style="width:580px;height:400px;">
            </div>
          </div>
          <div class="col-md-12">
            <h3 style="font-size:120%; color:white; text-align: center; font-weight:bold">4 Factors with our Target Value (Price for All grades)</h3>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/tableau_trend.png" class = "center"></center>
          </div>

          <div class="col-md-12">
            <div class="page-header"></div>
          
            <h3 style="font-size:120%; color:white; text-align: center;">UC Berkeley Data Analytics Bootcamp * December 2021 - June 2022</h3>
          </div>
      </div>
    </div>
  </body>
</html>
