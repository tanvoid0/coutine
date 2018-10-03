@extends('app')
<div class="row mx-auto" >
    <div class="col-12" >
        <div id="example_wrapper" class="dataTables_wrapper"><div class="dt-buttons">   <button class="dt-button buttons-create" tabindex="0" aria-controls="example" type="button"><span>New</span></button> <button class="dt-button buttons-selected buttons-edit disabled" tabindex="0" aria-controls="example" type="button"><span>Edit</span></button> <button class="dt-button buttons-selected buttons-remove disabled" tabindex="0" aria-controls="example" type="button"><span>Delete</span></button> </div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div><table id="example" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending" style="width: 130px;">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 207px;">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 97px;">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Extn.: activate to sort column ascending" style="width: 49px;">Extn.</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 86px;">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 75px;">Salary</th></tr>
                </thead>
                <tfoot>
                <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                </tfoot>
                <tbody><tr id="row_5" role="row" class="odd"><td class="sorting_1">Airi Satou</td><td>Accountant</td><td>Tokyo</td><td>5407</td><td>2008-11-28</td><td>$162,700</td></tr><tr id="row_25" role="row" class="even"><td class="sorting_1">Angelica Ramos</td><td>Chief Executive Officer (CEO)</td><td>London</td><td>5797</td><td>2009-10-09</td><td>$1,200,000</td></tr><tr id="row_3" role="row" class="odd"><td class="sorting_1">Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td>1562</td><td>2009-01-12</td><td>$86,000</td></tr><tr id="row_19" role="row" class="even"><td class="sorting_1">Bradley Greer</td><td>Software Engineer</td><td>London</td><td>2558</td><td>2012-10-13</td><td>$132,000</td></tr><tr id="row_28" role="row" class="odd"><td class="sorting_1">Brenden Wagner</td><td>Software Engineer</td><td>San Francisco</td><td>1314</td><td>2011-06-07</td><td>$206,850</td></tr><tr id="row_6" role="row" class="even"><td class="sorting_1">Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td>4804</td><td>2012-12-02</td><td>$372,000</td></tr><tr id="row_43" role="row" class="odd"><td class="sorting_1">Bruno Nash</td><td>Software Engineer</td><td>London</td><td>6222</td><td>2011-05-03</td><td>$163,500</td></tr><tr id="row_23" role="row" class="even"><td class="sorting_1">Caesar Vance</td><td>Pre-Sales Support</td><td>New York</td><td>8330</td><td>2011-12-12</td><td>$106,450</td></tr><tr id="row_51" role="row" class="odd"><td class="sorting_1">Cara Stevens</td><td>Sales Assistant</td><td>New York</td><td>3990</td><td>2011-12-06</td><td>$145,600</td></tr><tr id="row_4" role="row" class="even"><td class="sorting_1">Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td>6224</td><td>2012-03-29</td><td>$433,060</td></tr></tbody></table><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0" tabindex="0" id="example_previous">Previous</a><span><a class="paginate_button current" aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next">Next</a></div></div>
    </div>
</div>