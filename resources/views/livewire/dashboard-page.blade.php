<div class="p-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
  <div class="flex gap-2">
    <x-gui.card title="This is a great title" img="/img/hyunday.jpg">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex consequuntur, tempore asperiores corrupti omnis odio debitis eius animi numquam a!
    </x-gui.card>

    <x-gui.horizontal-card
      title="Another Title"
      img="/img/hyunday.jpg"
    >
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nemo soluta autem, temporibus dignissimos eius facere laudantium eaque hic officiis minima modi, culpa laborum illum, numquam enim maxime perspiciatis saepe?<x-gui.badge value="badge" role="secondary"/>   <x-gui.spinner size="xs" role="danger" />

    </x-gui.horizontal-card>
  </div>

  <div class="mt-6">
    <x-gui.badge role="success" value="formularios" class="inline-block" size="xl"/>

    <div class="grid grid-cols-2 gap-4 mt-6">
      <div class="col">
        <x-gui.label value="nombre completo" />
        <x-gui.input type="text" />
      </div>
      <div class="col">
        @php
          $options = ["NFL", "NBA", "NHL", "MLS", "MLB"]
        @endphp
        <x-gui.label value="deporte" />
        <x-gui.select :options="$options" />
      </div>
    </div>

    <div class="mt-4">
      <x-gui.label value="biografía" />
      <x-gui.textarea rows="5" />
    </div>

    <div class="mt-4">
      <x-gui.label value="upload a file" />
      <x-gui.upload-file />
    </div>

  </div>
</div>
