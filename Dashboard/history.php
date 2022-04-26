<div class="inner_section">
				<div id="record_container" class="record_container">
								<h3 class="title">MR PATRICK MVUMA CLINIC</h3><br>
								Phone: +000-000-000-000<br>
								Email: info@patrickmvuma.com			
			                    <label style="float: right"><?php echo date('l jS \of F Y ');?></label>

				 	<table class="table" >
                       
                        <tr class="table_row table_part">
                       
                            <td class="table_column" style="background-color:DodgerBlue;">
                                PATIENT INFORMATION
                            </td>
                        </tr>
                        <tr class="table_row clearfix">
                            <td class="table_column table_head s-column">
                               Full name
                            </td>
                            <td class="table_column table_head s-column">
                               Date of Birth
                            </td>
                            <td class="table_column table_head s-column">
                               Gender
                            </td>
                           
                            <td class="table_column s-column">
                             
                               <span id="bankcbn4"></span>   

                            </td>
                            <td class="table_column s-column">
                                <span id="bc4"></span>
                            </td>
                            <td class="table_column s-column">
                                <span id="collfee4"></span>
                            </td>
                            
                        </tr>
                        <tr class="table_row table_part">
                            <td class="table_column"style="background-color:DodgerBlue;">
                                COMPLAINT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               PRESENTING COMPLAINT
                            </td>                            
                            <td class="table_column table_head m-column">
                                HISTORY OF PRESENTING COMPRAINT
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="mytin4"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="fee4"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column"style="background-color:DodgerBlue;">
                                MEDICAL TREATMENT
                            </td>
                        </tr>
                        <tr class="table_row">
                            
                            <td class="table_column table_head s-column">
                               DIAGNOSE
                            </td>                            
                            <td class="table_column table_head m-column">
                                PRESCRIPTION
                            </td>
                            
                            <td class="table_column s-column">
                                <span id="pn4"></span>
                            </td>
                            <td class="table_column m-column">
                                <span id="relation4"></span>
                            </td>
                         </tr>
                        <tr class="table_row table_part">
                            <td class="table_column"style="background-color:DodgerBlue;">
                                MANAGEMENT PLAN
                            </td>
                        </tr>
                        <tr class="table_row">                    
                                                        
                           <td class="table_column l-column">
                                <span id="address4"></span>
                            </td>
                         </tr>
                        
                        </table>
                        <div class="modal" id="displaystudentinfo">
			<span class="close-modal">
							<button type="submit" class="btn btn-info" id="PrintButton" onclick="PrintPage()"><span class='glyphicon glyphicon-print' style="color: white"></span> </button>&nbsp;
							<button type="submit" class="btn btn-danger"  data-dismiss="modal"><span class='glyphicon glyphicon-remove' style="color: white"></span> </button>&nbsp;
                             <input type="hidden"  id='ccodes1'/>
                           <!--<button type="button" class="Sendpharmacy btn btn-success"  data-dismiss="modal"><span class='fa fa-money' style="color: white"></span>&nbsp;<span id='stdalert'></span></button>-->
                             <span id='paystate'></span>
			</span>