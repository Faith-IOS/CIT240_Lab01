# CIT 240 – Open Source Programming
## Laboratory Activity 1 Worksheet

---

### Student & Activity Information
- **Course**: CIT 240 – Open Source Programming
- **Laboratory Activity**: Activity 1 – Open Source Project Viewer & Git Workflow
- **Project Folder**: `CIT240_Lab01`
- **Submission Naming Format**: `SURNAME_FirstName_CIT240_Lab01`
- **Date**: August 13, 2026

---

### Part I: Conceptual Questions & Answers

#### Q1: What is an Open-Source project, and what are its key characteristics?
**Answer**: An open-source project is software whose source code is made publicly available for anyone to inspect, modify, enhance, and distribute. Key characteristics include:
1. **Public Code Transparency**: Source code hosted in accessible repositories (e.g., GitHub, GitLab).
2. **Open Licensing**: Governed by open-source licenses (e.g., MIT, GPL, Apache, PSFL) that grant users rights to run, copy, modify, and redistribute code.
3. **Community Collaboration**: Development is driven by global contributors through issues, pull requests, and peer reviews.

#### Q2: What is the purpose of Git in software development?
**Answer**: Git is a distributed version control system (DVCS) that tracks changes in source code files over time. It allows developers to:
- Maintain a complete history of project revisions.
- Revert files or the entire project to previous states if bugs occur.
- Work concurrently on different features using branches without breaking the main codebase.
- Audit who made specific changes and why via detailed commit messages.

#### Q3: Explain the function of each of the following Git commands:
1. **`git init`**: Initializes a new, empty Git repository in the current working directory, creating a hidden `.git` folder to store version metadata.
2. **`git status`**: Displays the current state of the working directory and staging area (showing untracked, modified, or staged files).
3. **`git add <file>`**: Adds changes from the working directory to the Git staging area (index), preparing them for the next commit.
4. **`git commit -m "<message>"`**: Takes a snapshot of staged changes and records them permanently in the repository history with a descriptive commit message.
5. **`git log --oneline`**: Lists the commit history in a concise single-line format per commit, displaying the shortened commit hash and commit message.

---

### Part II: Program Source Code (`project_info.php`)

```php
<?php
// CIT 240 - Open Source Programming
// Laboratory Activity 1: Open Source Project Information Viewer

$projectName = "Linux Kernel";
$developer = "Linus Torvalds & Linux Kernel Development Community";
$language = "C, Assembly, Rust";
$license = "GNU General Public License v2.0 (GPL-2.0)";
$description = "The Linux Kernel is an open-source, monolithic, Unix-like operating system kernel created by Linus Torvalds that powers servers, Android devices, cloud infrastructure, and supercomputers globally.";

// Additional project information (Step 8)
$repositoryUrl = "https://github.com/torvalds/linux";
$latestVersion = "v6.10 / v6.11-rc (Stable)";
$supportedPlatforms = "x86_64, ARM64, RISC-V, PowerPC, MIPS";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIT 240 - Open Source Project Information</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f9; color: #333; margin: 0; padding: 40px; display: flex; justify-content: center; }
        .card { background: #ffffff; border-radius: 8px; padding: 30px; max-width: 650px; width: 100%; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #2c3e50; font-size: 22px; border-bottom: 2px solid #3498db; padding-bottom: 10px; margin-top: 0; }
        .info-row { margin-bottom: 12px; line-height: 1.6; }
        .label { font-weight: bold; color: #2c3e50; width: 180px; display: inline-block; }
        a { color: #3498db; text-decoration: none; }
        a:hover { text-decoration: underline; }
        .divider { border: 0; border-top: 1px solid #eee; margin: 15px 0; }
        .footer { margin-top: 25px; font-size: 12px; color: #7f8c8d; border-top: 1px solid #eee; padding-top: 10px; text-align: center; }
    </style>
</head>
<body>
    <div class="card">
        <h1>CIT 240 - Open Source Project Information</h1>
        <div class="info-row"><span class="label">Project Name:</span><span><?php echo $projectName; ?></span></div>
        <div class="info-row"><span class="label">Developer / Author:</span><span><?php echo $developer; ?></span></div>
        <div class="info-row"><span class="label">Programming Language:</span><span><?php echo $language; ?></span></div>
        <div class="info-row"><span class="label">Open-Source License:</span><span><?php echo $license; ?></span></div>
        <div class="info-row"><span class="label">Project Description:</span><span><?php echo $description; ?></span></div>
        <hr class="divider">
        <div class="info-row"><span class="label">Repository URL:</span><span><a href="<?php echo $repositoryUrl; ?>" target="_blank"><?php echo $repositoryUrl; ?></a></span></div>
        <div class="info-row"><span class="label">Latest Version:</span><span><?php echo $latestVersion; ?></span></div>
        <div class="info-row"><span class="label">Supported Platforms:</span><span><?php echo $supportedPlatforms; ?></span></div>
        <div class="footer">CIT 240 – Open Source Programming | Laboratory Activity 1</div>
    </div>
</body>
</html>
```

---

### Part III: Submission Requirements Checklist

| Requirement | Status | Details |
| :--- | :--- | :--- |
| **Project Folder Created** | Completed | `CIT240_Lab01` |
| **Featured Open Source Project** | Completed | **Linux Kernel** by Linus Torvalds (`github.com/torvalds/linux`) |
| **PHP/HTML Program Created** | Completed | `project_info.php` & `index.html` |
| **Git Repository Initialized & Pushed** | Completed | `Faith-IOS/CIT240_Lab01` on GitHub |
| **Worksheet Completed** | Completed | `CIT240_Lab01_Worksheet.md` |
