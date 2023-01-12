@extends('layouts.dashboard')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="mt-10 flex w-4/5 flex-col rounded-lg justify-center">
        <div class="rounded-lg bg-white" id="editorjs"></div>
    <button class=" mt-10 w-1/4 btn btn-primary" onclick="saveEntry()">Save</button>
</section>


{{-- Entry submission alert --}}
<div id="submission-confirmation-Alert" class="alert alert-success shadow-lg hidden absolute bottom-4 right-4 w-auto">
    <div>
      <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
      <span>Journal Entry Saved!</span>
    </div>
  </div>


<script>

    const editor = new EditorJS({
  /**
   * Id of Element that should contain the Editor
   */
  holder: 'editorjs',
  tools: {
    code: CodeTool,
    list: {
      class: List,
      inlineToolbar: true,
      config: {
        defaultStyle: 'unordered'
      }
    },
    header: {
      class: Header,
      config: {
        placeholder: 'Enter a header',
        levels: [2, 3, 4],
        defaultLevel: 3
      }
    },

  }

});

const submissionAlert = document.getElementById("submission-confirmation-Alert");

function saveEntry() {

    editor.save()
        .then((outputData) => {
            console.log('Article data: ', outputData);
            fetch("{{route('store-entry')}}", {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(outputData)
            })
            .then(() => {submissionAlert.classList.remove("hidden");})
            .then(setTimeout(() => {
                submissionAlert.classList.add("hidden");
            }, 2500));
        }).catch((error) => {
        console.log('Saving failed: ', error)
        });
}

</script>

@endsection
