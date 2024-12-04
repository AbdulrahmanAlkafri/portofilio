@extends('layouts.skeleton')

@section('title', 'Contact Us')

@section('content')
<x-contact-landing />
<x-contact-form />
<x-contact-info />
<x-accordion :questions="$questions" />
@endsection