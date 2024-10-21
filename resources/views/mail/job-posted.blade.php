<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! your job is now live to see for everyone on our website.
</p>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View your created job</a>
</p>