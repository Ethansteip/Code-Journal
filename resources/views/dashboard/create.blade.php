@extends('layouts.dashboard')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<section class="mt-10 flex w-4/5 flex-col rounded-lg justify-center">
        <div class="rounded-lg bg-white py-10" id="editorjs"></div>
    <!-- The button to open modal -->
    <label for="my-modal-4" class="btn btn-primary w-24 mt-10">Save</label>

    <!-- Put this part before </body> tag -->
    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
    <label for="my-modal-4" class="modal cursor-pointer">
    <label class="modal-box relative w-96" for="" data-theme="dark">
        <h3 class="text-lg text-accent font-bold">Finalize Journal Entry!</h3>
        <div class="form-control w-full max-w-xs">
            <label class="label">
                <span class="label-text">Journal Entry Title</span>
            </label>
            <input id="title-input" type="text" placeholder="Type here" class="input input-bordered w-full max-w-xs" />
        </div>

        <div class="flex flex-col mt-5">
            <label for="start" class="label"><span class="label-text">Entry Date</span></label>
            <input id="datePicker" class="input input-bordered w-full max-w-xs" type="date" id="start" name="trip-start" value="2023-07-22" min="" max="">
        </div>

        <div class="flex align-items-center">
          <button onclick="saveEntry()" class="btn btn-accent mt-5 flex-end">Submit</button>

          {{-- Entry submission alert --}}
          <div id="submission-confirmation-Alert" class="alert shadow-lg hidden absolute bottom-4 right-4 w-auto">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-teal-500 flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span class="text-accent">Journal Entry Saved!</span>
            </div>
        </div>
        </div>




    </label>
    </label>
</section>




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

// Get submission confirmation alert element
const submissionAlert = document.getElementById("submission-confirmation-Alert");

// Get & set default date of datepicker to today's dat.
let datePicker = document.getElementById('datePicker');
datePicker.valueAsDate = new Date();

// Get Title entry element
let titleInput = document.getElementById("title-input");


function saveEntry() {

    datePicker = datePicker.value;
    titleInput = titleInput.value

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
                body: JSON.stringify({data: outputData, title: titleInput, date: datePicker})
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
