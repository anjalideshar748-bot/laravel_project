<x=frontend-layout>
 {{companies}}
 <section>
    <div class="container">
        <h1>Compani Data</h1>
        <table>
            <thead>
                <tr>
                    <th class="border-2"> Name</th>
                     <th class="border-2"> Phone</th>
                      <th class="border-2"> Email</th>
                       <th class="border-2"> Address</th>
                        <th class="border-2"> Logo</th>
                         <th class="border-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $c)
<tr>
                    <td class="border-2">
                        {{$c->name}}
                    </td>
                      <td  class="border-2">
                         {{$c->phone}}
                      </td>
                        <td class="border-2">
                             {{$c->email}}
                        </td>
                          <td class="border-2">
                             {{$c->address}}
                          </td>
                            <td class="border-2">
                                <img src="{{asset($c->logo)}}" alt="">
                            </td>
                              <td class="border-2">

                              </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
 </section>
</x=frontend-layout>
