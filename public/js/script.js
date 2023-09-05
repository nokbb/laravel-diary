//inputのアイコンをfade
$(".input").focusin(function () {
  $(this).find(".fade").animate({ opacity: "0" }, 200);
});

$(".input").focusout(function () {
  $(this).find(".fade").animate({ opacity: "1" }, 300);
});


//パスワードの可視性を切り替え
$(document).ready(function () {
  $(".eye").click(function () {
    let $previousInput = $(this).prev().prev(); // .fadeの前の要素、つまりinput要素を取得
    if ($previousInput.attr("type") === "password") {
      $previousInput.attr("type", "text");
      $(this).find("img").attr("src", "img/open.jpg"); // パスワードが見えるアイコンに変更
    } else {
      $previousInput.attr("type", "password");
      $(this).find("img").attr("src", "img/close.jpg"); // パスワードが見えないアイコンに変更
    }
  });
});


const cameraWidth = 400;
const cameraHeight = 400;

// カメラを起動
const cameraInitSmartphoneSupport = () => {
  const video = $("#camera")[0];

  // スマホからの閲覧か
  const isMobile = /iPhone|Android/.test(navigator.userAgent);

  const cameraSetting = {
    audio: false,
    video: {
      width: isMobile ? cameraHeight : cameraWidth,
      height: isMobile ? cameraWidth : cameraHeight,
      facingMode: "environment",
    },
  };

  // HTTPSのチェック
  // if (window.location.protocol !== "https:") {
  //   alert("カメラを利用するにはHTTPSが必要です。");
  //   return;
  // }

  navigator.mediaDevices
    .getUserMedia(cameraSetting)
    .then((mediaStream) => {
      video.srcObject = mediaStream;
    })
    .catch((err) => {
      console.log(err.toString());
      alert(
        "カメラへのアクセスが許可されていないか、利用できるカメラがありません。"
      );
    });
};

const shoot = () => {
  const video = $("#camera")[0];
  const canvas = $("#canvas")[0];
  canvas.width = cameraWidth;
  canvas.height = cameraHeight;

  const ctx = canvas.getContext("2d");
  ctx.drawImage(video, 0, 0, cameraWidth, cameraHeight);

  // キャンバス上の×ボタンを表示
  $("#clear-canvas-btn").show();

  // 撮影後の状態設定
  isCameraOn = false;
  $("#camera-action-btn").val("カメラ起動");
};

// カメラを閉じる
const closeCamera = () => {
  const $video = $("#camera");
  const stream = $video[0].srcObject;

  if (stream) {
    const tracks = stream.getTracks();
    tracks.forEach((track) => track.stop());
  }

  $video[0].srcObject = null;
};

// キャンバスをクリアする関数
const clearCanvas = () => {
  const canvas = $("#canvas")[0];
  const ctx = canvas.getContext("2d");
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // キャンバス上の×ボタンを非表示にする
  $("#clear-canvas-btn").hide();

  // カメラボタンのテキストを撮影可能な状態に更新
  $("#camera-action-btn").val("撮影");
};

$(document).ready(function () {
  let isCameraOn = false;

  $("#canvas").hide();
  $("#camera").show();

  // 現在のURLを取得
  const currentURL = window.location.pathname;

  // cameraが開かれた場合、自動的にカメラを起動
  if (currentURL.endsWith('camera.html')) {
    cameraInitSmartphoneSupport();
    isCameraOn = true;
    $("#camera-action-btn").val("撮影");
  }

  $("#camera-action-btn").on("click", function () {
    if (isCameraOn) {
      shoot();
      $("#canvas").show();
      $("#camera").hide();
      $("#camera-action-btn").hide();
      $(".text-container").show();
      $(".addition-container").show();
    }
    // main.htmlの場合cameraにリダイレクト
    if (currentURL.endsWith('main.html')) {
      window.location.href = 'camera.html';
    }
  });

  $(".close-camera").on("click", function () {
    closeCamera();
    isCameraOn = false;
    // $("#camera-action-btn").val("カメラ起動");
    window.location.href = 'main.html';
  });

  $("#clear-canvas-btn").on("click", function () {
    clearCanvas();
    $("#camera").show();
    $("#canvas").hide();
    $("#camera-action-btn").show();
    $(".text-container").hide();
    $(".addition-container").hide();
  });
});



//行数が動的に変わる
$(function () {
  $(document).on("input", "textarea.auto_resize", function () {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
    underlineTextarea($(this));
  });

  function underlineTextarea(textarea) {
    const container = textarea.closest(".textarea-wrap");
    const underlineContainer = container.find(".underline-container");
    underlineContainer.empty();

    const lineHeight = parseFloat(textarea.css("line-height"));

    // 改行の数を計算
    const lines = (textarea.val().match(/\n/g) || []).length + 1;

    //下線を引く
    for (let i = 1; i <= lines; i++) {
      const underline = $('<div class="underline"></div>');
      underline.css({
        top: i * lineHeight + "px",
      });
      underlineContainer.append(underline);
    }
  }
});

//鍵のオンオフの切り替え
$("#toggle, #toggle1, #toggle2").on("click", function () {
  const container = $(this).closest('.private');
  container.find(".lock-open").toggle();
  container.find(".lock").toggle();
});

//タブの切り替え
$(function() {
  $(".tab").on("click", function () {
    $(".tab, .panel").removeClass("active");

    $(this).addClass("active");

    var index =$(".tab").index(this);
    $(".panel").eq(index).addClass("active");
  })
})

//ミートボールメニューをクリックでモーダルを開く
$(".memory-meatball-menu").on("click", function () {
  $(".modal-container").addClass("active");
  return false;
});

//モーダルの外側をクリックしたらモーダルを閉じる
$(document).on("click", function (e) {
  if (!$(e.target).closest(".modal-body").length) {
    $(".modal-container").removeClass("active");
  }
});


//削除アラート
$(".delete-menu").on("click", function () {
  if (!confirm("削除しますか？")) {
    return false;
  } else {
    window.location.href = "memories.html";
  }
});

//ログアウトアラート
$("#logout").on("click", function () {
  if (!confirm("ログアウトしますか？")) {
    return false;
  } else {
    window.location.href = "login.html";
  }
});

//検索画面での友達追加ボタン
$("#friend-addition").on("click", function () {
  $(this).text("フォロー中");
  $(this).addClass("action");
  return false;
});

$(document).ready(function () {
  $("#friend-addition").click(function () {
    const $this = $(this);
    const isFollowing = $this.hasClass("following");

    if (isFollowing) {
      $this.removeClass("following");
      $this.text("フォロー");
      // ここでAPIに「フォロー解除」を通知
    } else {
      $this.addClass("following");
      $this.text("フォロー中");
      // ここでAPIに「フォロー」を通知
    }
  });
});
