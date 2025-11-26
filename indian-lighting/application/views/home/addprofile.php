 <style>
   #div2,
   #div3 {
     display: none;
   }

   #prev {
     display: none;
     float: left;
   }

   .clear {
     clear: both
   }

   .tabs {
     padding: 17px;
     /*margin-top:11rem;*/
   }

   .tabs li {
     display: inline-block;
     padding: 10px;
     cursor: pointer;
   }

   .active {
     font-weight: bold;
   }

   .span {
     display: inline-block;
     width: 30px;
     line-height: 28px;
     border-radius: 20px;
     background-color: #a3248f;
     color: white;
     text-align: center;
     margin-right: 10px;
   }

   .active1 {
     background-color: green
   }

   .tabsSection {
     margin-top: 11rem !important;
     /*background: aqua;*/
     width: 70%;
     display: flex;
     margin-bottom: 5rem !important;
     flex-direction: column;
     -webkit-box-shadow: -1px -1px 14px -1px rgba(0, 0, 0, 0.75);
     -moz-box-shadow: -1px -1px 14px -1px rgba(0, 0, 0, 0.75);
     box-shadow: -1px -1px 14px -1px rgb(0 0 0 / 40%);
     justify-content: center;
     align-items: center;
     margin: auto;
   }

   .profileform {
     padding: 22px;
   }

   .btn_detail {
     display: flex;
     width: 52%;
     justify-content: space-evenly;
     align-items: center;
     padding: 22px 0px;
     margin: auto;
   }

   .btn_detail button {
     padding: 12px 20px;
     background: coral;
   }

   @media screen and (max-width: 768px) {
     .tabsSection {
       margin-top: 11rem !important;
       /*background: aqua;*/
       width: 95%;
     }
   }
   }

   .tabs li {
     display: inline-block;
     cursor: pointer;
     padding: 10px;
     background-color: #eee;
     margin: 0 5px;
   }

   .tabs li.active {
     background-color: #ddd;
   }

   #main>div {
     display: none;
   }

   #main>div.active {
     display: block;
   }
 </style>
 <div class="tabsSection">
   <ul class="tabs">
     <li class="active" data-tab="div1">
       <span class="span">1</span> Personal Details
     </li>
     <li data-tab="div2">
       <span class="span">2</span> Family Details
     </li>
     <li data-tab="div3 last">
       <span class="span">3</span> Contact Details
     </li>
   </ul>
   <div id="main">
     <div id="div1" class="first current active">
       <form class="row g-3 needs-validation profileform" method="post" enctype="multipart/form-data" novalidate>
         <div class="col-md-4">
           <label for="validationCustom01" class="form-label">Age <span style="color: red;">*</span>
           </label>
           <input type="text" class="form-control" id="validationCustom01" name="age" value="
						<?php echo set_value('age'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom02" class="form-label">DOB<span style="color: red;">*</span></label>
           <input type="date" class="form-control" id="validationCustom02" name="dateofbirth" value="
							<?php echo set_value('dateofbirth'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustomUsername" class="form-label">Height</label>
           <div class="input-group has-validation">
             <select class="form-select" aria-label="Default select example" name="height">
               <option selected>Select </option> <?php foreach ($height as $ht) : ?> <option value="
										<?= $ht['height_range'] ?>"> <?= $ht['height_range'] ?> </option> <?php endforeach; ?>
             </select>
             <div class="invalid-feedback"> Please choose a username. </div>
           </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Weight</label>
           <input type="text" class="form-control" id="validationCustom03" name="weight" value="
								<?php echo set_value('weight'); ?>" required>
           <div class="invalid-feedback"> Please provide a valid weight. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Select Complexity</label>
           <select class="form-select" aria-label="Default select example" name="complex">
             <option selected>Select </option> <?php foreach ($complexity as $complex) : ?> <option value="
										<?= $complex['complex_name'] ?>"> <?= $complex['complex_name'] ?> </option> <?php endforeach; ?>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Caste<span style="color: red;">*</span></label>
           <select class="form-select" aria-label="Default select example" name="caste">
             <option selected>Select </option> <?php foreach ($caste as $castes) : ?> <option value="
										<?= $castes['caste_name'] ?>"> <?= $castes['caste_name'] ?> </option> <?php endforeach; ?>
           </select>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Sub-Caste</label>
           <select class="form-select" aria-label="Default select example" name="subcaste">
             <option selected>Select </option> <?php foreach ($subcaste as $subcaste) : ?> <option value="
										<?= $subcaste['subcaste_name'] ?>"> <?= $subcaste['subcaste_name'] ?> </option> <?php endforeach; ?>
           </select>
         </div>
             <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Gender<span style="color: red;">*</span></label>
           <select class="form-select" aria-label="Default select example" name="gender">
             <option selected>Select </option> <?php foreach ($gender as $gen) : ?> <option value="
													<?= $gen['gender_name'] ?>"> <?= $gen['gender_name'] ?> </option> <?php endforeach; ?>
             <!--<option value="2">Higher class</option>-->
           </select>
           <div class="invalid-feedback"> please select the gender </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Married Status</label>
           <select class="form-select" aria-label="Default select example" name="maritalstatus" required>
             <option selected>Select </option> <?php foreach ($married_status as $married) : ?> <option value="
													<?= $married['status'] ?>"> <?= $married['status'] ?> </option> <?php endforeach; ?>
           </select>
           <div class="invalid-feedback"> please select the marital status </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Select Qualification</label>
           <select class="form-select" aria-label="Default select example" name="qualification">
             <option selected>Select</option> <?php foreach ($qualification as $qualify) : ?> <option value="
										<?= $qualify['qualification_name'] ?>"> <?= $qualify['qualification_name'] ?> </option> <?php endforeach; ?>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Occupation</label>
           <input type="text" class="form-control" id="validationCustom03" name="occupation" value="
									<?php echo set_value('occupation'); ?>" required>
           <div class="invalid-feedback"> occupation field is empty </div>
         </div>
         
         <!--<div class="col-md-4">-->
         <!--  <label for="validationCustom03" class="form-label">Mama Surname</label>-->
         <!--  <input type="text" class="form-control" id="validationCustom03" name="mamasurname" value="-->
									<!--	<?php //echo set_value('mamasurname'); ?>" required>-->
         <!--  <div class="invalid-feedback"> mamasurname field is empty </div>-->
         <!--</div>-->
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Income Detail</label>
           <select class="form-select" aria-label="Default select example" name="income_detail">
             <option selected>Select</option> <?php foreach ($income as $incomes) : ?> <option value="
												<?= $incomes['range'] ?>"> <?= $incomes['range'] ?> </option> <?php endforeach; ?>
           </select>
           <div class="invalid-feedback"> please select the income </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Address</label>
           <input type="text" class="form-control" id="validationCustom03" name="address" value="
											<?php echo set_value('address'); ?>" required>
           <div class="invalid-feedback"> address field is empty </div>
         </div>
         <!--  <div class="col-md-4">-->
         <!--    <label for="validationCustom03" class="form-label">Preference</label>-->
         <!--     <select class="form-select" aria-label="Default select example" name="preference">-->
         <!--  <option selected>Select </option>-->
         <!--   <?php //foreach ($preference as $pref) : ?>-->
         <!--            <option value="
										<?//= $pref['pref_id'] ?>">
										<?//= $pref['pref_name'] ?></option>-->
         <!--        <?php //endforeach; ?>-->
         <!--</select>-->
         <!--    <div class="invalid-feedback">-->
         <!--      password does not match-->
         <!--    </div>-->
         <!--  </div>-->
    <div class="col-md-4">
           <label for="validationCustom03" class="form-label">State<span style="color: red;">*</span></label>
           <select class="form-select" aria-label="Default select example" name="state">
             <option selected>Select </option> <?php foreach ($states as $state) : ?> <option value="
										<?= $state['state'] ?>"> <?= $state['state'] ?> </option> <?php endforeach; ?>
           </select>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">City<span style="color: red;">*</span></label>
           <select class="form-select" aria-label="Default select example" name="city">
             <option selected>Select </option> <?php foreach ($city as $cities) : ?> <option value="
										<?= $cities['name'] ?>"> <?= $cities['name'] ?> </option> <?php endforeach; ?>
           </select>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Diet</label>
           <select class="form-select" aria-label="Default select example" name="diet" value="
												<?php echo set_value('diet'); ?>" required>
             <option selected>Select </option>
             <option value="1">Veg </option>
             <option value="2">Non-Veg </option>
             <!--<option value="2">Eggeterian</option>-->
             <option value="2">Vegan</option>
             <option value="2">Occasionally Non-veg</option>
           </select>
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Drinking Habits</label>
           <select class="form-select" aria-label="Default select example" name="drink" value="
												<?php echo set_value('drink'); ?>" required>
             <option selected>Select </option>
             <option value="1">Yes </option>
             <option value="2">No</option>
             <!--<option value="2">Non-Alcoholic </option>-->
             <option value="2">Occasionally</option>
           </select>
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Smoking Habits</label>
           <select class="form-select" aria-label="Default select example" name="smoke" value="
												<?php echo set_value('smoke'); ?>" required>
             <option selected>Select </option>
             <option value="1">Yes </option>
             <option value="2">No</option>
             <!--<option value="2">Non-Smoking </option>-->
             <option value="2">Occasionally</option>
           </select>
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="formFile" class="form-label">Upload photo<span style="color: red;">*</span></label>
           <input class="form-control" type="file" id="formFile" name="photo1">
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="formFile" class="form-label">Upload photo</label>
           <input class="form-control" type="file" id="formFile" name="photo2">
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="formFile" class="form-label">Upload photo</label>
           <input class="form-control" type="file" id="formFile" name="photo3">
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="formFile" class="form-label">Upload Bio Data<span style="color: red;">*</span></label>
           <input class="form-control" type="file" id="formFile" name="biophoto">
           <div class="invalid-feedback"> password does not match </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Brief about yourself and family</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="yourself" value="
																<?php echo set_value('yourself'); ?>" required>
															</textarea>
           <div class="invalid-feedback"> yourself field is empty </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Enter Hobbies</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="hobbies" value="
																<?php echo set_value('hobbies'); ?>" required>
															</textarea>
           <div class="invalid-feedback"> hobbies field is empty. </div>
         </div>
         <!--</form>-->
     </div>
     <div id="div2">
       <div class="row g-3 needs-validation profileform">
         <div class="col-md-4">
           <label for="validationCustom01" class="form-label">Grand father name </label>
           <input type="text" class="form-control" id="validationCustom01" name="grandfather" value="
																	<?php echo set_value('grandfather'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom02" class="form-label">Grand Mother name </label>
           <input type="text" class="form-control" id="validationCustom02" name="grandmother" value="
																		<?php echo set_value('grandmother'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustomUsername" class="form-label">Father name</label>
           <div class="input-group has-validation">
             <input type="text" class="form-control" id="validationCustomUsername" name="fathername" aria-describedby="inputGroupPrepend" value="
																				<?php echo set_value('fathername'); ?>" required>
             <div class="invalid-feedback"> Please choose a username. </div>
           </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustomUsername" class="form-label">Mother name</label>
           <div class="input-group has-validation">
             <input type="text" class="form-control" id="validationCustomUsername" name="mothername" aria-describedby="inputGroupPrepend" value="
																					<?php echo set_value('mothername'); ?>" required>
             <div class="invalid-feedback"> Please choose a username. </div>
           </div>
         </div>
         
          <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Mama Surname</label>
           <input type="text" class="form-control" id="validationCustom03" name="mamasurname" value="
										<?php echo set_value('mamasurname'); ?>" required>
           <div class="invalid-feedback"> mamasurname field is empty </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Bhua</label>
           <select class="form-select" aria-label="Default select example" name="bhua" value="
																					<?php echo set_value('bhua'); ?>" required>
             <option selected>select</option>
             <option value="1">None</option>
             <option value="2">1</option>
             <option value="3">2</option>
             <option value="4">3</option>
             <option value="5">4</option>
             <option value="6">5</option>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Pufa </label>
           <select class="form-select" aria-label="Default select example" name="pufa" value="
																					<?php echo set_value('pufa'); ?>" required>
             <option selected>select</option>
             <option value="1">None</option>
             <option value="2">1</option>
             <option value="3">2</option>
             <option value="4">3</option>
             <option value="5">4</option>
             <option value="6">5</option>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Masa </label>
           <select class="form-select" aria-label="Default select example" name="masa" value="
																					<?php echo set_value('masa'); ?>" required>
             <option selected>select</option>
             <option value="1">None</option>
             <option value="2">1</option>
             <option value="3">2</option>
             <option value="4">3</option>
             <option value="5">4</option>
             <option value="6">5</option>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom03" class="form-label">Masi </label>
           <select class="form-select" aria-label="Default select example" name="masi" value="
																					<?php echo set_value('masi'); ?>" required>
             <option selected>select</option>
             <option value="1">None</option>
             <option value="2">1</option>
             <option value="3">2</option>
             <option value="4">3</option>
             <option value="5">4</option>
             <option value="6">5</option>
           </select>
           <div class="invalid-feedback"> Please provide a valid phone number. </div>
         </div>
        <!-- HTML Code -->
<div class="col-md-4">
    <label for="totalBrothers" class="form-label">Total Brothers</label>
    <div class="input-group has-validation">
        <input type="number" id="totalBrothers" name="brother" class="form-control" min="0" placeholder="Enter total number of brothers" required>
        <div class="invalid-feedback"> Please enter the total number of brothers. </div>
    </div>
    <!-- Additional fields for brothers -->
    <div id="brotherDetails" style="display: none;">
        <label for="marriedBrothers" class="form-label">Married Brothers</label>
        <input type="number" id="marriedBrothers" name="married_brothers" class="form-control" min="0" placeholder="Number of married brothers">
        
        <label for="unmarriedBrothers" class="form-label">Unmarried Brothers</label>
        <input type="number" id="unmarriedBrothers" name="unmarried_brothers" class="form-control" min="0" placeholder="Number of unmarried brothers">
    </div>
</div>

<div class="col-md-4">
    <label for="totalSisters" class="form-label">Total Sisters</label>
    <div class="input-group has-validation">
        <input type="number" id="totalSisters" name="sister" class="form-control" min="0" value="<?php echo set_value('sister'); ?>" placeholder="Enter total number of sisters" required>
        <div class="invalid-feedback"> Please enter the total number of sisters. </div>
    </div>
    <!-- Additional fields for sisters -->
    <div id="sisterDetails" style="display: none;">
        <label for="marriedSisters" class="form-label">Married Sisters</label>
        <input type="number" id="marriedSisters" name="married_sisters" class="form-control" min="0" placeholder="Number of married sisters">
        
        <label for="unmarriedSisters" class="form-label">Unmarried Sisters</label>
        <input type="number" id="unmarriedSisters" name="unmarried_sisters" class="form-control" min="0" placeholder="Number of unmarried sisters">
    </div>
</div>

<!-- JavaScript Code -->
<script>
    function handleFamilyDetails(inputId, detailsId) {
        const totalInput = document.getElementById(inputId);
        const detailsDiv = document.getElementById(detailsId);

        totalInput.addEventListener('input', function() {
            const totalCount = parseInt(this.value) || 0;
            
            if (totalCount > 0) {
                detailsDiv.style.display = 'block';
            } else {
                detailsDiv.style.display = 'none';
            }
        });
    }

    handleFamilyDetails('totalBrothers', 'brotherDetails');
    handleFamilyDetails('totalSisters', 'sisterDetails');

    // Function to update total number of brothers/sisters
    function updateTotalBrothers() {
        const totalBrothers = parseInt(document.getElementById('totalBrothers').value) || 0;
        const marriedBrothers = parseInt(document.getElementById('marriedBrothers').value) || 0;
        const unmarriedBrothers = parseInt(document.getElementById('unmarriedBrothers').value) || 0;
        if (marriedBrothers + unmarriedBrothers > totalBrothers) {
            alert('The sum of married and unmarried brothers cannot exceed the total number of brothers.');
        }
    }

    function updateTotalSisters() {
        const totalSisters = parseInt(document.getElementById('totalSisters').value) || 0;
        const marriedSisters = parseInt(document.getElementById('marriedSisters').value) || 0;
        const unmarriedSisters = parseInt(document.getElementById('unmarriedSisters').value) || 0;
        if (marriedSisters + unmarriedSisters > totalSisters) {
            alert('The sum of married and unmarried sisters cannot exceed the total number of sisters.');
        }
    }

    document.getElementById('marriedBrothers').addEventListener('input', updateTotalBrothers);
    document.getElementById('unmarriedBrothers').addEventListener('input', updateTotalBrothers);
    document.getElementById('marriedSisters').addEventListener('input', updateTotalSisters);
    document.getElementById('unmarriedSisters').addEventListener('input', updateTotalSisters);
</script>

         <!--<div class="col-md-4">-->
         <!--  <label for="validationCustomUsername" class="form-label">Sister </label>-->
         <!--  <div class="input-group has-validation">-->
         <!--    <select id="sisterSelect" class="form-select" aria-label="Default select example" name="sister" value="-->
									<!--													<?php echo set_value('sister'); ?>" required>-->
         <!--      <option selected>Sister's</option>-->
         <!--      <option value="0">0</option>-->
         <!--      <option value="1">1</option>-->
         <!--      <option value="2">2</option>-->
         <!--      <option value="3">3</option>-->
         <!--      <option value="4">4</option>-->
         <!--      <option value="5">5</option>-->
         <!--      <option value="6">6</option>-->
         <!--      <option value="7">7</option>-->
         <!--      <option value="8">8</option>-->
         <!--      <option value="9">9</option>-->
         <!--      <option value="10">10</option>-->
         <!--    </select>-->
         <!--    <div class="invalid-feedback"> Please choose a username. </div>-->
         <!--  </div>-->
         <!--</div>-->
       </div>
     </div>
  
     <div id="div3" class="last">
       <div class="row g-3 needs-validation profileform">
         <div class="col-md-4">
           <label for="validationCustom01" class="form-label">Enter Email</label>
           <input type="email" class="form-control" id="validationCustom01" name="mail" value="
																					<?php echo set_value('mail'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustom02" class="form-label">Enter mobile number</label>
           <input type="text" class="form-control" id="validationCustom02" name="pnumber" value="
																						<?php echo set_value('pnumber'); ?>" required>
           <div class="valid-feedback"> Looks good! </div>
         </div>
         <div class="col-md-4">
           <label for="validationCustomUsername" class="form-label">Alternate Mobile number</label>
           <div class="input-group has-validation">
             <input type="text" class="form-control" id="validationCustomUsername" name="alterpname" aria-describedby="inputGroupPrepend" value="
																								<?php echo set_value('alterpname'); ?>" required>
             <div class="invalid-feedback"> Enter valid number </div>
           </div>
         </div>
         <div class="col-md-12">
           <button style="cursor: pointer;display: flex;margin: auto; width: 273px;  align-items: center; justify-content: center;
    padding: 15px 41px;background:green;" type="submit" class="btn btn-primary">Submit</button>
         </div>
       </div>
       </form>
     </div>
   </div>
   <div class="btn_detail">
     <button id="prev">Prev</button>
     <button id="next">Next</button>
   </div>
 </div>
 <script>
   document.addEventListener('DOMContentLoaded', function() {
     const tabs = document.querySelectorAll('.tabs li');
     const tabContents = document.querySelectorAll('#main > div');
     let currentIndex = 0; // Start with the first tab
     function showTab(index) {
       tabs.forEach((tab, i) => {
         tab.classList.toggle('active', i === index);
         tabContents[i].classList.toggle('active', i === index);
       });
     }
     tabs.forEach((tab, index) => {
       tab.addEventListener('click', function() {
         currentIndex = index;
         showTab(currentIndex);
       });
     });
     document.getElementById('next').addEventListener('click', function() {
       if (currentIndex < tabs.length - 1) {
         currentIndex++;
         showTab(currentIndex);
       }
     });
     document.getElementById('prev').addEventListener('click', function() {
       if (currentIndex > 0) {
         currentIndex--;
         showTab(currentIndex);
       }
     });
     // Initialize with the first tab
     showTab(currentIndex);
   });
 </script>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script>
   $(document).ready(function() {
     $('form').on('submit', function(event) {
       event.preventDefault();
       var formData = new FormData(this);
       $.ajax({
        //  url: ' < ? = base_url('home/setProfile') ? > ',
         url: '<?php echo base_url('home/setProfile'); ?>',

         type: 'POST',
         data: formData,
         contentType: false,
         processData: false,
         success: function(response) {
           alert('Form submitted successfully.');
           // redirect(base_url('home/welcome'));
           window.open("https://spandigitproject.me/matrimony/home/profiles");
         },
         error: function(xhr, status, error) {
           alert('An error occurred: ' + xhr.responseText);
         }
       });
     });
   });
 </script>
 <script>
   //   $(document).ready(function () {
   //     $('.tabs li').click(function () {
   //       var tab_id = $(this).attr('data-tab');
   //       $('.tabs li').removeClass('active');
   //       $('.tab-content').removeClass('active');
   //       $(this).addClass('active');
   //       $("#" + tab_id).addClass('active');
   //     });
   //     $('#next').click(function () {
   //       var current = $('.tabs li.active');
   //       var next = current.next('li');
   //       if (next.length) {
   //         next.click();
   //       }
   //     });
   //     $('#prev').click(function () {
   //       var current = $('.tabs li.active');
   //       var prev = current.prev('li');
   //       if (prev.length) {
   //         prev.click();
   //       }
   //     });
   //   });
//   document.getElementById('brotherSelect').addEventListener('change', function() {
//      const brotherFields = document.getElementById('brotherFields');
//      brotherFields.innerHTML = ''; // Clear existing fields
//      const numberOfFields = parseInt(this.value);
//      for (let i = 1; i <= numberOfFields; i++) {
//       const newField = document.createElement('div');
//       newField.className = 'mb-3';
//       newField.innerHTML = `
        
// 																		<label for="brotherName${i}" class="form-label">Brother ${i} Name</label>
// 																		<select class="form-select" aria-label="Default select example" id="brotherName${i}" name="brotherName${i}" required>
// 																			<option selected>Select married status</option>
// 																			<option value="1">Married</option>
// 																			<option value="2">Un-Married</option>
// 																		</select>
// 																	</div>
//       `;
//       brotherFields.appendChild(newField);
//      }
//   });
//   document.getElementById('sisterSelect').addEventListener('change', function() {
//      const brotherFields = document.getElementById('sisterFields');
//      brotherFields.innerHTML = ''; // Clear existing fields
//      const numberOfFields = parseInt(this.value);
//      for (let i = 1; i <= numberOfFields; i++) {
//       const newField = document.createElement('div');
//       newField.className = 'mb-3';
//       newField.innerHTML = `
        
// 																	<label for="sisterName${i}" class="form-label">Sister ${i} Name</label>
// 																	<select class="form-select" aria-label="Default select example" id="sisterName${i}" name="sisterName${i}" required>
// 																		<option selected>Select married status</option>
// 																		<option value="1">Married</option>
// 																		<option value="2">Un-Married</option>
// 																	</select>
// 																</div>
//       `;
//       brotherFields.appendChild(newField);
//      }
//   });
 </script>