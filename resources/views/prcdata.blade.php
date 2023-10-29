
<div class="col-12 stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title"> </h4>
                        <br>
                        <form class="forms-sample" action="" method="post">
                          @csrf
                          @method('PUT')
                          <div class="form-group row">
                            <label for="picture" class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="picture" value="{{ $product->picture }}" name="picture">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="name" value="{{ $product->name }}" name="name">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="category" class="col-sm-3 col-form-label">Category</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="category" value="{{ $product->category }}" name="category">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" id="description" value="{{ $product->description }}" name="description">
                            </div>
                          </div>
                          <br>
                          <a href="{{route('home')}}/{{ $product->id }}"><button type="submit" class="btn btn-success mr-2">Update</button></a>
                          <button class="btn btn-danger">Cancel</button>
                        </form>
                      </div>
                    </div>
                  </div>



                