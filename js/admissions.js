document.addEventListener("DOMContentLoaded", () => {
  /* Accordion */
  document.querySelectorAll(".accordion-trigger").forEach((btn) => {
    btn.addEventListener("click", () => {
      const item = btn.parentElement;
      const isOpen = item.classList.contains("open");
      document
        .querySelectorAll(".accordion-item")
        .forEach((i) => i.classList.remove("open"));
      if (!isOpen) item.classList.add("open");
    });
  });

  /* Sticky apply CTA */
  const stickyApply = document.getElementById("sticky-apply");
  window.addEventListener(
    "scroll",
    () => {
      if (window.scrollY > 600) stickyApply?.classList.add("visible");
      else stickyApply?.classList.remove("visible");
    },
    { passive: true },
  );

  /* ── Multi-step form ── */
  const admForm = document.getElementById("admission-form");
  if (!admForm) return;

  const panels = admForm.querySelectorAll(".form-step-panel");
  const indicators = admForm.querySelectorAll(".form-step-indicator");
  let currentStep = 1;

  function showStep(n, scroll) {
    panels.forEach((p, i) => {
      p.style.display = i + 1 === n ? "" : "none";
    });
    indicators.forEach((ind, i) => {
      ind.classList.remove("active", "done");
      if (i + 1 < n) ind.classList.add("done");
      else if (i + 1 === n) ind.classList.add("active");
    });
    currentStep = n;
    if (scroll) admForm.scrollIntoView({ behavior: "smooth", block: "start" });
  }

  function validateStep(n) {
    const panel = admForm.querySelector("#step-" + n);
    const required = panel.querySelectorAll("[required]");
    let valid = true;
    let firstInvalid = null;
    required.forEach((field) => {
      const err = field.closest(".form-group")
        ? field.closest(".form-group").querySelector(".field-error")
        : admForm.querySelector("#terms-error");
      const empty =
        field.type === "checkbox" ? !field.checked : !field.value.trim();
      const badEmail =
        field.type === "email" &&
        field.value.trim() &&
        !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value);
      if (empty || badEmail) {
        valid = false;
        if (!firstInvalid) firstInvalid = field;
        field.style.borderColor = "var(--terracotta)";
        if (err) {
          err.textContent = badEmail
            ? "Enter a valid email address."
            : "This field is required.";
          err.classList.add("visible");
        }
      } else {
        field.style.borderColor = "";
        if (err) {
          err.textContent = "";
          err.classList.remove("visible");
        }
      }
    });
    if (firstInvalid)
      firstInvalid.scrollIntoView({ behavior: "smooth", block: "center" });
    return valid;
  }

  admForm.querySelectorAll(".form-control").forEach((field) => {
    field.addEventListener("input", () => {
      field.style.borderColor = "";
      const err = field.closest(".form-group")?.querySelector(".field-error");
      if (err) {
        err.textContent = "";
        err.classList.remove("visible");
      }
    });
  });

  admForm.querySelectorAll(".form-next-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      if (validateStep(currentStep)) showStep(currentStep + 1, true);
    });
  });
  admForm.querySelectorAll(".form-back-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
      if (currentStep > 1) showStep(currentStep - 1, true);
    });
  });

  /* Division → Grade linking */
  const divSel = document.getElementById("division-select");
  const gradeSel = document.getElementById("grade-select");
  const gradeMap = {
    kindergarten: ["PP1", "PP2", "Grade 1"],
    junior: ["Grade 2", "Grade 3", "Grade 4", "Grade 5", "Grade 6"],
    senior: [
      "Grade 7",
      "Grade 8",
      "Grade 9",
      "Grade 10",
      "Grade 11",
      "Grade 12",
    ],
  };
  if (divSel && gradeSel) {
    divSel.addEventListener("change", () => {
      const opts = gradeMap[divSel.value] || [];
      gradeSel.innerHTML =
        '<option value="" disabled selected>Select grade...</option>';
      opts.forEach((g) => {
        const o = document.createElement("option");
        o.value = g;
        o.textContent = g;
        gradeSel.appendChild(o);
      });
      gradeSel.disabled = opts.length === 0;
    });
  }

  /* Character counters */
  [
    ["medical", "medical-count", 500],
    ["message", "message-count", 800],
  ].forEach(([name, id, max]) => {
    const ta = admForm.querySelector('[name="' + name + '"]');
    const el = document.getElementById(id);
    if (ta && el)
      ta.addEventListener("input", () => {
        el.textContent = ta.value.length + " / " + max;
      });
  });

  /* File upload */
  const fileInput = document.getElementById("file-input");
  const fileList = document.getElementById("file-list");
  const uploadArea = document.getElementById("file-upload-area");
  if (fileInput && fileList) {
    fileInput.addEventListener("change", renderFiles);
    uploadArea?.addEventListener("dragover", (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = "var(--terracotta)";
    });
    uploadArea?.addEventListener("dragleave", () => {
      uploadArea.style.borderColor = "";
    });
    uploadArea?.addEventListener("drop", (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = "";
      fileInput.files = e.dataTransfer.files;
      renderFiles();
    });
    function renderFiles() {
      fileList.innerHTML = "";
      Array.from(fileInput.files).forEach((file) => {
        const icon =
          file.type === "application/pdf" ? "fa-file-pdf" : "fa-file-image";
        const kb = (file.size / 1024).toFixed(0);
        const row = document.createElement("div");
        row.style.cssText =
          "display:flex;align-items:center;gap:0.75rem;padding:0.55rem 0.875rem;background:var(--cream-dark);border-radius:var(--radius-sm);font-size:0.82rem;";
        row.innerHTML = `<i class="fa-solid ${icon}" style="color:var(--terracotta);flex-shrink:0;" aria-hidden="true"></i><span style="flex:1;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">${file.name}</span><span style="color:var(--ink-faint);flex-shrink:0;">${kb} KB</span>`;
        fileList.appendChild(row);
      });
    }
  }

  /* Submit */
  admForm.addEventListener("submit", (e) => {
    e.preventDefault();
    if (!validateStep(4)) return;
    const btn = document.getElementById("submit-btn");
    const success = document.getElementById("form-success-msg");
    const notice = admForm.querySelector(".fee-notice");
    const progress = document.getElementById("form-progress");
    if (btn) {
      btn.textContent = "Sending…";
      btn.disabled = true;
    }
    setTimeout(() => {
      panels.forEach((p) => {
        p.style.display = "none";
      });
      if (progress) progress.style.display = "none";
      if (notice) notice.style.display = "none";
      if (success) success.style.display = "block";
    }, 1200);
  });

  showStep(1, false);
});
