<?php $num=rand(1,6)?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Share Your Photo With Us!</title>
        <style>
            body {
                background: url("http://www.canon.ca/support_images/RightNow_Images/instagram/CanonBG-LG<?php echo $num ?>.jpg") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            
            #something {
                background: rgba(255, 255, 255, .8) no-repeat left top fixed;
                padding-bottom: 30px;
                padding-top: 30px;
            }
            
            @media (min-width: 1200px) {
                .container {
                    width: 40vw;
                }
            }
            
            @media (max-width: 767px) {
                body {
                    background: url("http://www.canon.ca/support_images/RightNow_Images/instagram/CanonBG-SM<?php echo $num ?>.jpg") no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }
            }
            
            #img {
                /*height: auto;
            width: auto;*/
                max-width: 20vw;
            }
        </style>
    </head>

    <body onload="disableSubmit()">
        <div class="container pull-left" id="something">
            <form class="form-horizontal" id="rn_SocialSubmit" method="post" action="">
                <div class="form-group">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-11">
                        <img src="http://canon.ca/support_images/canon-logo.png" id="img">
                        <h2>Share Your Photo With Us!</h2>
                        <h6>Thanks for being part of Canon Canada's social media community. We think your photo is A+ and would love to share it with the rest of our community. So, if you'll bear with us, we've got a few questions for you below. <br> This agreement gives Canon Canada a license to use your photo on our social media channels and on our website. You retain all the rights. Your personal information is being collected for the sole purpose of contacting you regarding your photo and will not be used otherwise. For any further questions, please <a href="mailto:mediarelations@canada.canon.com">email us here</a></h6>
                    </div>
                </div>
                <div class="form-group">
                    <label for="first-name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" onchange="setField('first-name','rn_TextInput_3_Contact.Name.First')" id="first-name" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="last-name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" onchange="setField('last-name','rn_TextInput_5_Contact.Name.Last')" id="last-name" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="instagram-uname" class="col-sm-2 control-label">@</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" onchange="setField('instagram-uname','rn_TextInput_7_Contact.CustomFields.c.instagram_handle')" id="instagram-uname" placeholder="Instagram Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-addr" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" onchange="setField('email-addr','rn_TextInput_9_Contact.Emails.PRIMARY.Address')" id="email-addr" placeholder="canon@example.com">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone-num" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" onchange="setPhone()" id="phone-num" placeholder="647-555-2457">
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo-link" class="col-sm-2 control-label">Upload photo</label>
                    <div class="col-sm-9">
                        <rn:widget path="input/FileAttachmentUpload" label_input="" required="true" max_attachments="2" valid_file_extensions="jpg,jpeg,png,gif,bmp,tiff" /> Accepted filetypes: .jpg, .jpeg, .png, .gif, .bmp, .tiff
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo-desc" class="col-sm-2 control-label">Photo Details</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" onchange="setField('photo-desc',	'rn_TextInput_13_Incident.Threads')" id="photo-desc" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-11">
                        <h4>COPYRIGHT LICENSE AGREEMENT</h4>
                        <textarea class="form-control" rows="10" name="terms" readonly>
                            COPYRIGHT LICENSE AGREEMENT This Copyright License Agreement (the “Agreement”) is entered into and effective as of the ____ day of ______________, 2015 (the “Effective Date”), between ____________________________ (“Licensor”) and Canon Canada Inc. (“Canon”) (each a “Party” and collectively, “Parties”). WHEREAS, Licensor owns the copyright, title, trademarks and all other related rights in and to the work attached hereto as Exhibit “A” (hereinafter the “Work”); and WHEREAS, Canon desires to obtain, and the Licensor agrees to grant, a license authorizing the use of the Work by Canon in accordance with the terms and conditions of this Agreement. NOW THEREFORE, in consideration of the promises, conditions, covenants and warranties herein contained and other good and valuable consideration, the receipt and sufficiency of which are acknowledged, the parties agree as follows: 1. Licensor hereby grants to Canon, its parent and its affiliates a non-exclusive, transferable, perpetual, worldwide and royalty-free right and license to use any element of the Work without the need to obtain further authorization or consent and without further consideration or subject to any condition or limitation whatsoever in: (i) any and all social media platforms including, but not limited to: Twitter, Instagram, Facebook, LinkedIn, Vine, Pinterest, Periscope, Google+, and YouTube; (ii) internal business communications within Canon ; and (iii) on Canon’s website
                            <http://www.canon.ca> via the use of a social media feed. 2. Licensor hereby irrevocably waives against and in favour of the world all moral rights (as that term is defined in the Canadian Copyright Act) in relation to the Work. 3. Licensor warrants and represents that: a. the Work was created by a camera system manufactured by Canon, its respective parent companies, subsidiaries and/or affiliates; b. it owns all rights, title and interest in and to the Work; c. it has full right, power and authority to enter into this Agreement and to grant the rights granted herein; d. it is the creator of the Work and the sole owner thereof and that no other party has any right in and to the Work; e. the Work is original and does not infringe upon any existing copyright or violate any proprietary, personality, moral or intellectual property rights of others; f. Canon’s inclusion and use of the Work will not violate any rights of any kind or nature whatsoever of any third party; g. the Work does not violate any law, statute, ordinance or regulation, including any privacy legislation; and h. the copyright in the Work has not been in any way assigned, transferred, granted or licensed to any other party. 4. Licensor shall indemnify and hold harmless Canon, its successors, assigns and licensees, and the respective officers, directors, agents and employees, from and against any and all claims, damages, liabilities, costs and expenses (including reasonable legal fees), arising out of or in any way connected with any breach of any representation or warranty made by Licensor herein or any breach of this Agreement. 5. The parties acknowledge and agree that the Exhibits or Schedules to this Agreement can be amended by mutual agreement of the parties. 6. The parties each acknowledge that they have executed this Agreement voluntarily after receiving independent legal advice from their respective solicitors. 7. This Agreement shall be binding upon and shall inure to the benefits of the respective successors and/or assigns of the parties hereto. 8. This Agreement constitutes the entire agreement between the Parties concerning the subject matter hereof and it supersedes any prior written or oral agreements, representations, warranties, arrangements, negotiations and understandings thereon. 9. This Agreement shall be governed by, and interpreted in accordance with, the laws of the Province of Ontario and the federal laws of Canada applicable therein. 10. The parties declare that they require that this Agreement and all documents relating thereto be drawn up in the English language. Les parties aux présentes déclarent qu'elles ont exigé que cette entente et tous les documents y afférant soient en la langue anglaise. 11. This Agreement may be executed and delivered by facsimile or reproductive signature and/or in counterparts and any such execution and dellivery shall be a valid and binding execution hereof. IN WITNESS WHEREOF, the parties have caused this Agreement to be executed the date set forth above. CANON CANADA INC. Per:______________________________ Name: ___________________________ Title: ____________________________ LICENSOR Witness: ____________________________ Signature: ______________________________ Name: _________________________________ Date: __________________________________   EXHIBIT “A”
                        </textarea>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="iAgree" disabled> I have read, understood and agree
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="ageMajority"> I am the age of majority in my province/territory
                            </label>
                        </div>
                    </div>
                </div>
                <rn:widget path="input/FormSubmit" label_button="I Accept" on_success_url="/app/socialPhoto_confirm" />
                <div>
                    <p>

                        <br> By clicking I Accept, you confirm that you have read the Copyright Licence Agreement, the Privacy Policy and the Terms of Use and that you understand them and that you agree to be bound by them.</p>
                    <p><a href=" http://www.canon.ca/inetCA/en/home/method/loadprivacypolicy">Privacy Policy</a> | <a href="http://www.canon.ca/inetCA/en/home/method/loadtermsofuse">Terms of Use</a></p>
                    <p>
                        <h6>© 2015 Canon Canada Inc. All rights reserved. Reproduction in whole or in part without permission is prohibited. Canon is a trademark of Canon Inc</h6>
                    </p>
                </div>
                <div class="hidden">
                    <rn:widget path="input/FormInput" name="Contact.Name.First" required="true" />
                    <rn:widget path="input/FormInput" name="Contact.Name.Last" required="true" />
                    <rn:widget path="input/FormInput" name="Contact.CustomFields.c.instagram_handle" />
                    <rn:widget path="input/FormInput" name="Contact.Emails.PRIMARY.Address" required="true" />
                    <rn:widget path="input/FormInput" name="Contact.CustomFields.c.phonenumber" />
                    <rn:widget path="input/FormInput" name="Incident.Threads" required="true" />
                    <rn:widget path="input/FormInput" name="Contact.CustomFields.c.lang_pref" default_value="35" />
                    <rn:widget path="input/FormInput" name="Contact.CustomFields.c.statusflg" default_value="D" />
                    <rn:widget path="input/FormInput" name="Incident.CustomFields.c.social" default_value="instagram" />
                </div>
            </form>
        </div>

        <script>
            document.getElementsByName("terms")[0].addEventListener("scroll", checkScrollHeight, false);

            function checkScrollHeight() {
                var agreementTextElement = document.getElementsByName("terms")[0]
                if ((agreementTextElement.scrollTop + agreementTextElement.offsetHeight) >= agreementTextElement.scrollHeight) {
                    document.getElementsByName("iAgree")[0].disabled = false;
                }
            }

            function disableSubmit() {
                document.getElementById("testButton").disabled = true;
            }

            document.getElementById("rn_FormSubmit_1_Button")

            var setField = function (thisFormId, rnwFormID) {
                var field = document.getElementById(thisFormId).value;
                document.getElementById(rnwFormID).value = field;
            }

            var setPhone = function () {
                var phone = document.getElementById("phone-num").value;
                document.getElementById("rn_TextInput_11_Contact.CustomFields.c.phonenumber").value = phone.replace(/[\D]/g, "");
            }
        </script>
    </body>

    </html>
