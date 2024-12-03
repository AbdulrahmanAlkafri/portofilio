@extends('layouts.skeleton')

@section('title', 'Home Page')

@section('content')
<x-landing />
<x-dashboard-landing />
<x-partner-section />
<x-our-offer />
<x-achievements />
<x-challenges />
<x-invest-about />
<x-dashboard-info />
<x-map-view />
<x-testimonials :reviews="$reviews" />
<x-help-section />
@endsection