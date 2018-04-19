<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <title>教育思想大讨论 - 填写问卷</title>

        <!-- Fonts -->
        <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('storage/style.css') }}" rel="stylesheet">

    </head>
    <body background="{{ asset('storage/bg.png') }}">
    <div class="container">
        <div class="page-header">
            <h1>填写问卷</h1>
        </div>
        <form action="/submit" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 control-label">您的性别<span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input required type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male"> 男
                    </label>
                    <label class="radio-inline">
                        <input required type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female"> 女
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="class" class="col-sm-2 control-label">您的身份<span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <select required id="class" class="form-control">
                        <option>在校本科生</option>
                        <option>在校硕士研究生</option>
                        <option>在校博士研究生</option>
                        <option>专任教师</option>
                        <option>学校管理人员</option>
                        <option>毕业校友</option>
                        <option>其他</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">您的昵称<span style="color:red">*</span></label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">在树立学术志向方面，您有哪些意见及建议？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">在硕士培养方面，您对学校有哪些意见及建议？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">在教师教学能力和态度方面，您有哪些意见及建议？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">在培育学生远大志方面，您对学校有何建议？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">您对学校的博士生培养有什么意见及建议？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input0">您对本科生课程设置的满意度是（1分为最不满意，10为最满意）</label>
                <div class="col-sm-10">
                    <div class="btn-group" data-toggle="buttons">
                        @for ($i = 1; $i < 11; $i++)
                        <label class="btn btn-default">
                            <input type="radio" name="options" id="option1" autocomplete="off"> {{ $i }}
                        </label>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input0">您对硕士生导师指导的满意度是（1分为最不满意，10为最满意）</label>
                <div class="col-sm-10">
                    <div class="btn-group" data-toggle="buttons">
                        @for ($i = 1; $i < 11; $i++)
                            <label class="btn btn-default">
                                <input type="radio" name="options" id="option1" autocomplete="off"> {{ $i }}
                            </label>
                        @endfor
                    </div>
                </div>
                <input class="hidden" id="input0" name="input0">
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input0">您对博士生导师指导的满意度是（1分为最不满意，10为最满意）</label>
                <div class="col-sm-10">
                    <div class="btn-group" data-toggle="buttons">
                        @for ($i = 1; $i < 11; $i++)
                            <label class="btn btn-default">
                                <input type="radio" name="options" id="option1" autocomplete="off"> {{ $i }}
                            </label>
                        @endfor
                    </div>
                </div>
                <input class="hidden" id="input0" name="input0">
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="input0">您对课堂教学效果的满意度是（1分为最不满意，10为最满意）</label>
                <div class="col-sm-10">
                    <div class="btn-group" data-toggle="buttons">
                        @for ($i = 1; $i < 11; $i++)
                            <label class="btn btn-default">
                                <input type="radio" name="options" id="option1" autocomplete="off"> {{ $i }}
                            </label>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">您是否愿意留下真实姓名和联系方式，便于线下组织交流讨论？</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">提交</button>
                </div>
            </div>
        </form>
    </div>
    </body>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</html>
