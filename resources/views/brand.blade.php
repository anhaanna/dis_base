@extends('deafult.layouts.layout')
@section('content')

<div class="brand">
  <div class="brand-img">
    <img src=" {{ url('images/the-brand.jpg') }} ">
    <div class="text-img">
        <h1>THE BRAND</h1>
        <p>The story behind the Disguise theme</p>
    </div>
  </div>

  <div class="brand-content">
      <div class="brand-left">
        <img src=" {{ url('images/msqred.jpg') }} ">
      </div>
      <div class="brand-about about-us">
        <h1 id="ab-us-h1">AN UNFORGETTABLE SCENT TRAIL</h1>
        <h2 id="ab-us-h2">Welcome to the world of Disguise Fragrances!</h2>
        <p class="brand-p">Intrigue and secrets make the game of seduction all the more beautiful… Which is why when we got down to creating Disguise Fragrances we bottled the range with an element of suspense and mystery!</p>
        <p class="brand-p">The fine fragrances range features signature scents for both men and women. The intense Eau de Toilette perfumes are complemented by fresh, all-day Perfumed Deodorant variants. Sensuality and intrigue are at the heart of these magical scent compositions that promise a lasting effect on the others around. The intriguing aura of these fragrances makes others thoughtful about the personality of the perfume wearer. If one perfume brings an unforgettable whiff of a clandestine affair, the other conjures the image of an enigmatic beauty at a masquerade ball… In all, it’s a range of totally unforgettable scents.</p>
        <p class="brand-p">The exhaustive fragrance profile of our range appeals even to the most diverse scent connoisseurs.</p>
      </div>

  </div>



</div>

@endsection