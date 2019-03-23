<?php
     session_start();
    include_once 'includes/header.php';
     include_once 'includes/navbar-map.php';
    
     $id = $_SESSION['id']; 
    


    
?>

<style>

.nav-pills a{
    color: #000 !important;
}

</style>

  <!-- Main content  : start -->
        <main class="page-content"> 

            <div class="admin">
                <div class="container">
                    <div class="row">
                        <div class="col-10">
                            <h2 class="page__title text-center">My Listings</h2>
                        </div>
                    </div>













<center>
<ul class="nav nav-pills pl-5 ml-5 content-justify-center">
  <li class="active ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#home">BnBs</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu1">Properties</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu2">Food</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu3">Items</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu4">Transportation</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu5">Pets & Livestock</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu6">Hotels & Motels</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu7">Services</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu8">Jobs</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu9">Social</a></li>
  <li class="ml-3 mr-3" style="color:#000 !important"><a data-toggle="pill" href="#menu10">Videos</a></li>
  
  
  
</ul></center>

<div class="tab-content">
  <div id="home" class="tab-pane in active">
     <div class="listings">
                        <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM bnbs WHERE listing_uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
       $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
     
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" >
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="bnb.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['listing_cat'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['listing_nightly'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['listing_created'] . "</span>
                                </div>

                                <div class=' stable-td listings-table__settings' >
                                ";
                              
               $_SESSION['lid'] = $row['id']; 
            
           echo "
                                
                                    <a href='edit-bnb.php?id=".$row['id']."' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                  <form class='form float-right col-1' action='includes/del.bnb.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";
                            
  


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div>  
  </div>
  <div id="menu1" class="tab-pane fade">
     <div class="listings">
                        <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM homes WHERE listing_uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
    $category = $row['listing_cat'];
     $messageid = $row['id'];
    if ($category == "Real Estate"){
        $link = 'edit-realestate.php?id='.$messageid;
    }
    if ($category == "Long Term Rentals"){
        $link = 'edit-long-term-rental.php?id='.$messageid;
    }
    if ($category == "Roommates"){
        $link = 'edit-roommates.php?id='.$messageid;
    }
    
     $deleted = $row['deleted'];
        $published =$row['published'];
      
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" >
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="listing.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['listing_cat'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['listing_purchase'] ."" . $row['listing_monthly'] ."</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['listing_created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='$link' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                     <form class='form float-right col-1' action='includes/del.homes.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  <div id="menu2" class="tab-pane fade">
     <div class="listings">
                      <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM food WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{ $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="job.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['payrate'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                    <form class='form float-right col-1' action='includes/del.food.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
   <div id="menu3" class="tab-pane fade">
     <div class="listings">
                        <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM items WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="item.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['price'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                    <form class='form float-right col-1' action='includes/del.item.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  <div id="menu4" class="tab-pane fade">
     <div class="listings">
                        <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM transport WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="hotel.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['title'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['nightly'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                   <form class='form float-right col-1' action='includes/del.trans.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
    
  </div>
    <div id="menu5" class="tab-pane fade">
      <div class="listings">
                        <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM pets WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="pet.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['breed'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['price'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch' >
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                     <form class='form float-right col-1' action='includes/del.pet.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  <div id="menu6" class="tab-pane fade">
      <div class="listings">
                      <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM hotels WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="hotel.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['title'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['nightly'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                    <form class='form float-right col-1' action='includes/del.hotel.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  <div id="menu7" class="tab-pane fade">
    <div class="listings">
                     <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM services WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="hotel.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['title'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['nightly'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                     <form class='form float-right col-1' action='includes/del.service.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
    <div id="menu8" class="tab-pane fade">
     <div class="listings">
                      <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Payrate</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM jobs WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="job.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['name'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['payrate'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                    <form class='form float-right col-1' action='includes/del.job.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
   <div id="menu9" class="tab-pane fade">
    <div class="listings">
                      <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Price</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM social WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="job.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['title'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Price'>
                                    <span class='listings-price'>";
echo "" . $row['payrate'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                     <form class='form float-right col-1' action='includes/del.social.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  <div id="menu10" class="tab-pane fade">
   <div class="listings">
                     <div class="row justify-content-between align-items-center">
                            
                             <div class="listings">
                        <div class="row col-12 justify-content-between align-items-center">
                            <div class="col-12 col-md-8">
                                <div class="listings-control list-inline mb-2">
                                    <div class="listings-choose list-inline-item mb-2 pl-5 ml-5 mb-md-0">
                                        <div class="checkbox">
                                            <label class="checkbox-label">
                                                <input type="checkbox" class="checkbox-input">
                                                <span class="checkbox-indicator"></span>
                                                <span class="checkbox-description listings-text">select / deselect all</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="listings-publish list-inline-item mb-2 mb-md-0">
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" checked name="listings-publish">
                                                <span class="listings-publish__val">
                                                    publish
                                                </span>
                                            </label>
                                        </div>
                                        <div class="listings-publish__item">
                                            <label class="listings-publish__label">
                                                <input type="radio" class="radio-input listings-publish__input" name="listings-publish">
                                                <span class="listings-publish__val">
                                                    unpublish
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <a href="#" class="listings-remove list-inline-item mb-2 mb-md-0">
                                        <i class="ico-remove"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="col-6 col-md-4">
                                <div class="search mb-2 col-6">
                                    <form class="form search-form">
                                        <label for="listings-search" class="search-label">
                                            <input class="form-control search-control" type="search" placeholder="Search" aria-label="Search" id="listings-search">    
                                        </label> 
                                        <button class="search-btn" type="submit"></button>                       
                                    </form>
                                </div>  
                            </div>
                        </div>

                        <div class="col-11 pl-5 ml-5 listings-table stable content-justify-center">
                            <div class="stable-tr stable-thead">
                                <div class="stable-th listings-table__title">
                                    <span class="stable-label">Title</span>
                                </div>

                                <div class="stable-th listings-table__category">
                                    <span class="stable-label caret">Category</span>
                                </div>

                                <div class="stable-th listings-table__price">
                                    <span class="stable-label caret">Earnings</span>
                                </div>

                                <div class="stable-th listings-table__published">
                                    <span class="stable-label">Published</span>
                                </div>

                                <div class="stable-th listings-table__created">
                                    <span class="stable-label">Created</span>
                                </div>

                                <div class="stable-th listings-table__settings">
                                    <span class="stable-label">
                                        &nbsp;
                                    </span>
                                </div>
                            </div>
                            
                            
                       <?php     
                       
                       
                       
                     $result = mysqli_query($conn,"SELECT * FROM videos WHERE uid='$id'");

echo "<table border='1'>
";

while($row = mysqli_fetch_array($result))
{
     $deleted = $row['deleted'];
        $published =$row['published'];
       $messageid = $row['id'];
        $_SESSION['messageToDelete'] = $row['id'];
    if ($deleted !=1){
echo '<div class="stable-tr">  
                                <div class="stable-td listings-table__title" data-th="Title">
                                    <div class="stable-tr">
                                        <div class="stable-td listings-table__check">
                                            <div class="checkbox">
                                                <label class="checkbox-label">
                                                    <input type="checkbox" class="checkbox-input" checked>
                                                    <span class="checkbox-indicator"></span>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="stable-td listings-table__show">
                                            <a href="video.php?id='.$row["id"].'">
                                                <i class="ico-show"></i>
                                            </a>
                                        </div>

                                        <div class="stable-td listings-table__name">
                                            <div class="listings-name">';

echo "" . $row['vid_title'] . "</div>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__category' data-th='Categoty'>
                                    <span class='listings-category'>";
echo "" . $row['vid_type'] . "</span>
                                </div>

                                <div class='stable-td listings-table__price' data-th='Earnings'>
                                    <span class='listings-price'>";
echo "" . $row['nightly'] . "</span>
                                </div>

                                <div class='stable-td listings-table__published' data-th='Published'>
                                    <div class='listings-published'>
                                        <div class='switch'>
                                            <label>    
                                                <input type='checkbox' name=switcher' ";if ($published !=1){ echo 'checked';} echo">
                                                <span class='lever'>
                                                    <i class='lever-key lever-on'>
                                                        On
                                                    </i>
                                                    <i class='lever-key lever-off'>
                                                        Off
                                                    </i>
                                                </span>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class='stable-td listings-table__created' data-th='Created'>
                                    <span class='listings-created'>";
echo "" . $row['created'] . "</span>
                                </div>

                                <div class='stable-td listings-table__settings'>
                                    <a href='#' class='listing-edit list-inline-item'>
                                        <i class='ico-edit'></i>
                                    </a>
                                    <form class='form float-right col-1' action='includes/del.video.inc.php' method='post'>
                                        <input type='hidden' name='deleted' value='" . $row['id']. "'>
                                     <button style='width:30px; height:35px' type='submit' class='btn  p-1 m-1 ' name='delete-submit'><i class='ico-remove'></i>
</button>
                           </form>
                                </div>                                
                            </div>";


echo "</tr>";
}}
echo "</table>";

                      
                       ?>     
                            
                            
                        </div>
                    </div>                    
                </div> 
            </div> 
  </div>
  
  
</div>





















                   

        </main> <!-- Main content  : end -->


 <?php
       include_once 'includes/footer.php';
    ?>
