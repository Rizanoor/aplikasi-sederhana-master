@extends('layouts.main')

@section('container')
    <h2 class="mb-3"> {{ $post->title }}</h2>

    {!! $post->body !!}

  <br>
  <a href="/posts" class="btn btn-primary mt-3">Back to Blog</a>

@endsection
{{-- <p>
  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur sit recusandae voluptates, dolor voluptatem animi. Deleniti soluta eveniet possimus a dignissimos nemo animi itaque sequi in illum. Impedit placeat itaque est soluta asperiores blanditiis excepturi assumenda quos consectetur nihil sapiente quis quidem necessitatibus deserunt quae porro recusandae, possimus dolor nulla numquam. Fuga nisi illo temporibus asperiores quod accusantium,</p>
  
  <p>
  eos minus quia corrupti natus ratione deleniti nemo, nesciunt facere reprehenderit provident quasi blanditiis eaque! Saepe accusantium tenetur blanditiis cumque praesentium voluptate veritatis ipsam, commodi nihil optio vel perspiciatis recusandae cum distinctio molestiae. Consequatur eveniet error aspernatur odio, ratione sit mollitia provident! Laudantium corporis ratione earum! Quam fugiat enim neque quis recusandae quasi ratione, est earum excepturi, eius at id facilis illum.</p>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odit laboriosam repudiandae, inventore ullam assumenda quas molestiae natus officiis tempore sapiente nostrum illo aspernatur, error esse accusamus. Atque, aliquid! Provident reprehenderit, in ad doloribus libero amet cum! Aut, quasi distinctio!</p>

  Post::create([
    'title' => Judul Keempat',
    'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur sit recusandae voluptates, dolor voluptatem animi.',
    'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur sit recusandae voluptates, dolor voluptatem animi. Deleniti soluta eveniet possimus a dignissimos nemo animi itaque sequi in illum. Impedit placeat itaque est soluta asperiores blanditiis excepturi assumenda quos consectetur nihil sapiente quis quidem necessitatibus deserunt quae porro recusandae, possimus dolor nulla numquam. Fuga nisi illo temporibus asperiores quod accusantium,</p><p>eos minus quia corrupti natus ratione deleniti nemo, nesciunt facere reprehenderit provident quasi blanditiis eaque! Saepe accusantium tenetur blanditiis cumque praesentium voluptate veritatis ipsam, commodi nihil optio vel perspiciatis recusandae cum distinctio molestiae. Consequatur eveniet error aspernatur odio, ratione sit mollitia provident! Laudantium corporis ratione earum! Quam fugiat enim neque quis recusandae quasi ratione, est earum excepturi, eius at id facilis illum.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae odit laboriosam repudiandae, inventore ullam assumenda quas molestiae natus officiis tempore sapiente nostrum illo aspernatur, error esse accusamus. Atque, aliquid! Provident reprehenderit, in ad doloribus libero amet cum! Aut, quasi distinctio!</p>']) --}}