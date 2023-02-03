@extends('Layouts.layoute')

@section('content')
<style>
    a.btn-link {
  text-decoration: none;
  background-color: white;
  text-align: center;
  margin-left:80px; 
  margin-top:50px ;
  font-family:'Courier New', Courier, monospace;
}
a.btn-link2 {
  text-decoration: none;
  background-color:rgb(69, 77, 88);
  text-align: center;
  margin-left:80px; 
  margin-top:50px ;
  font-family:'Courier New', Courier, monospace;
  
}
h1{
    margin-top:50px ;

}
.hero-bg-image{
    background: url('https://images.unsplash.com/photo-1597839219216-a773cb2473e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')no-repeat center center /cover;
    background-attachment: fixed;
    height: 600px;

}

.container_3 {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 10px;
}

@media (min-width: 640px) {
  .container_3 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }
}
.p3{
    font-weight: bold;
  font-size: 20px;
  padding: 2px 0;
}
.h2_3{
    padding: 2px 0;
}



.container_4 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  padding: 15px;
  margin: 0 auto;
}

.h2_4{
  font-weight: bold;
  font-size: 5xl;
  padding-top: 10px;
  padding-bottom: 10px;
}

.p_4 {
    color: #c7c7cc;
    line-height: 1.5;
    padding: 10px;
}

.div_4 {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  width: 80%;
  margin: 0 auto;
}

@media (min-width: 576px) {
  .div_4 {
    display: grid;
  }
}

.div_6 {
   display: flex;
   width: 550px;
   margin-left:50px ;
   background-color: #d1561d;
   color: #fff;
   padding-top: 10px;
}

.ul_6 {
  display: flex;
}

@media (min-width: 768px) {
  .ul_6{
    display: flex;
  }
}

.ul_6 {
  font-size: 0.75rem;
}

.ul_6 {
  gap: 0.25rem;
}

.p_6 {
  padding: 0.5rem;
  border-radius: 0.25rem;
  display: inline-block;
  margin: 0.5rem 1rem;
}

@media (min-width: 768px) {
  .p_6 {
    margin-top: 0;
  }
}

.p_6:hover {
  background-color: #ffc107;
  color: #ffffff;
  transition: all 0.3s ease;
}

.h3_6 {
  font-size: 1.5em;
  line-height: 1.6;
  padding: 10px;
}
.img_3{
    display: inline;
    margin-left: 90px;
}
@media (min-width: 640px) {
    .img_3:rounded-lg {
        border-radius: 0.5rem/* 8px */;
    }
}

</style>

<div class="hero-bg-image d-flex items-center justify-content-center">
    <div class="your-class">
        <h1 class="text-white text-5xl text-uppercase font-bold pb-10 mt-50" >Welcome to my Blod</h1>
        <a  href="/" class="btn btn-link text-reset text-white py-2 px-5 rounded-lg font-weight-bold text-uppercase">Start Reading</a>
    </div>
  </div>



  <div class="container d-flex justify-content-center my-5 ">
    
    <div class="col-sm-6 px-1 mx-2 md:md-0">
        <img class="sm:rounded-lg"  src="https://picsum.photos/id/239/490/420" alt="" srcset="">

    </div>
    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <div>
            <h2 class="font-weight-bold text-gray-700 text-5xl text-uppercase">Sponsored by Hostinger, use the coupon to get a discount:</h2>
            <p class="font-weight-bold text-gray-600 text-xl text-uppercase"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis molestias. Fugiat</p>
            <p class="py-4 text-gray-300 text-xl ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam voluptatem veniam, est atque cumque eum delectus sint!</p>
            <a href="/" class="btn btn-link2 text-reset py-2 px-5 rounded-lg font-weight-bold text-uppercase">Read More</a>
        </div>
    </div>
  </div>



  <div  style="text-align: center; padding: 15px; background-color: #8B8B8B; color: #F2F2F2;">
    <h2 class="h2_3">blog Categoiers</h2>
    <div class="container_3">
        <span class="p3">UX Design Thnkin</span>
        <span class="p3">programming languges</span>
        <span class="p3">Graphic Design</span>
        <span class="p3">Front-End Develoipment </span>
    </div>
  </div>
  
  

<div class="container_4">
    <h2 class="h2_4">Recent Posts</h2>
    <p class="p_4"> ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam voluptatem veniam, est atque cumque eu</p>
</div>

<div class="div_5">
    <div class="div_6">
        <div style="margin:auto; padding-top:4px; padding-bottom:15px; width:80%;" >
        <ul class="ul_6">
            <li class="p_6"><a href="/">Bober</a></li>
            <li class="p_6"><a href="/">Bober</a></li>
            <li class="p_6"><a href="/">Bober</a></li>
            <li class="p_6"><a href="/">Bober</a></li>
        </ul>

        <h3 class="h3_6">
            dolor sit amet consectetur, adipisicing
             elit. Iste atque ea quis molestias. 
             Fugiat pariatur maxime quis culpa corporis 
            vitae repudiandae aliquam voluptatem veniam, est atque cumque eu
        </h3>
        <a href="/" class="btn btn-primary">Read More</a>
        </div>
        <div>
            <img src="https://picsum.photos/id/238/490/420" class="img_3" alt="" srcset="">
        </div>
    </div>

    
</div>
 
@endsection