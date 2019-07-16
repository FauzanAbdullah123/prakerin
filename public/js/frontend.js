// $(function() {
//     $.ajaxSetup({
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
//         }
//     });
//     var alamat_artikel = "/api/artikel";

//     $.ajax({
//         url: alamat_artikel,
//         method: "GET",
//         dataType: "json",

//         success: function(berhasil) {
//             // console.log(berhasil)
//             $.each(berhasil.data, function(key, value) {
//                 $("#isinya").append(
//                     `

//                     <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
//                             <!-- Post Thumbnail -->
//                             <div class="post-thumbnail">
//                                 <img src="../assets/img/artikel/${
//                                     value.foto
//                                 }" width="130" height="80" alt="">
//                             </div>

//                             <!-- Post Content -->
//                             <div class="post-content">
//                                 <a href="#" class="headline">
//                                     <h5>${value.judul}</h5>
//                                 </a>
//                                 <p>
//                                     ${data.konten}
//                                 </p>
//                                 <!-- Post Meta -->
//                                 <div class="post-meta">
//                                     <p><a href="#" class="post-author">${
//                                         value.user.name
//                                     }</a> on <a href="#" class="post-date">${
//                         value.created_at
//                     }</a></p>
//                                 </div>
//                             </div>
//                         </div>
//                     `
//                 );
//             });
//         }
//     });
// });
