<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## Physical Data Model
<img width="462" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/7d1377a4-b077-4a35-8230-088cafe6cc41">


## Middleware Auth User

> hanya user yang telah login yang dapat melakukan proses CRUD pada barang

```
Route::middleware('auth')->group(function () {
    Route::prefix('/barang')->group(function () {
        // show all barang
        Route::get('/', [BarangController::class, 'index']);
    
        // add barang
        Route::get('/add', [BarangController::class, 'create']);
        Route::post('/add', [BarangController::class, 'store']);
    
        // edit barang
        Route::get('/edit/{id}', [BarangController::class, 'edit']);
        Route::put('/edit/{id}', [BarangController::class, 'update']);
        Route::get('/detail/{id}', [BarangController::class, 'detail']); 
        
        Route::get('/delete/{id}', [BarangController::class, 'delete']);
        Route::delete('/delete/{id}', [BarangController::class, 'destroy']);
    });    
});

```


## Register Page (Breeze Blade)
<img width="429" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/310ce8b5-4078-4e83-9ac2-632f64e732e1">

## Login Page (Breeze Blade)
<img width="379" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/5082cdd1-d54b-4885-9fb8-7034b290380a">


## Show All Barang
<img width="756" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/c782806f-6abc-4abf-aec4-1b266472a796">


## Show Detailed Barang

> ketika user menekan tombol detail maka akan ke redirect ke `/barang/detail/{$barang->id}`

<img width="752" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/7e44a9a7-ac31-4af5-b1cb-52c4053b0816">


## Form Add Barang

<img width="487" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/6799a246-ba47-4279-b645-fd7f7defe6da">

### Dropdown
> Condition Dropdown

<img width="427" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/c19175bc-51b4-49d0-9cf2-ed21320462e3">

> Type Dropdown

<img width="474" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/669df0fd-a956-4c66-a9df-33df5bd6affd">

## Edit Barang

<img width="470" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/007ad988-a85a-47a5-8aef-ff4a43a2695b">

## Flash Message
> Gagal menyimpan karena ukuran gambar lebih dari 2 mb

<img width="755" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/5d7fa413-f8d3-4438-8de2-12daff661179">

> Berhasil menyimpan
<img width="749" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/49a612bb-6f9f-4b4b-af32-722dbe426fef">

> Berhasil update data
<img width="760" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/f2641bf1-f674-4fb3-a4a8-7c80eb3817be">

> Berhasil delete data
<img width="765" alt="image" src="https://github.com/dimss113/CRD-Laravel/assets/89715780/6a010b55-e437-4a1e-a6cb-225de3038a78">
