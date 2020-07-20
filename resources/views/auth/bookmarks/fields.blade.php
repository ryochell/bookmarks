
                        <div class="form-group col-md-12">
                            <label for="inputTitle">タイトル</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="inputTitle" value="{{ $bookmark->title ?? '' }}">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputUrl">URL</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="inputUrl" value="{{ $bookmark->url ?? '' }}">
                            @error('url')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputDescription">説明文</label>
                            <input type="text" class="form-control  @error('description') is-invalid @enderror" name="description" id="inputDescription" value="{{ $bookmark->description ?? '' }}">
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">保存</button>
                        <a href="{{ route('bookmarks.index') }}" class="btn btn-secondary">一覧へ戻る</a>
