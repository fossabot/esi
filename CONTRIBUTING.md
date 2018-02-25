# Contributing Guidelines

## How can you contribute to esi

There are many ways to contribute, from improving documentation, submitting bug reports and feature requests or writing code which can be incorporated into esi itself.

## What you should not do

**Do not** use the issue tracker for support questions! 

Support questions should be directed towards [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk).

If you find a security vulnerability, **do not** open an issue. Email [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk) instead. All security vulnerabilities will be promptly addressed.

In order to determine whether you are dealing with a security issue, ask yourself these questions:

* Can I access something that's not mine, or something I shouldn't have access to?
* Can I disable something for other people?
* Can I alter functionality outside the scope of the intended task?

If the answer to any of those questions is "yes", then you're probably dealing with a security issue. Note that even if you answer "no" to any question, you may still be dealing with a security issue, so if you're unsure, email [contact@anthonygrimes.co.uk](mailto:contact@anthonygrimes.co.uk) instead. All security vulnerabilities will be promptly addressed.

## How to report an issue

The steps and prerequisites to reporting an issue are detailed in full in the [issue template](ISSUE_TEMPLATE.md). These should be shown to you by default when making an issue.

## How to submit a pull request

The steps and prerequisites to submitting a pull request are detailed in full in the [pull request template](PULL_REQUEST_TEMPLATE.md). These should be shown to you by default when making a pull request.

## How to suggest a feature or enhancement

The steps and prerequisites to suggesting a feature or enhancement are detailed in full, in the [feature request template](FEATURE_REQUEST_TEMPLATE.md). **This will not appear by default**, so you will have to `Ctrl + C`, `Ctrl + V` the template into the issue window after you've deleted the default issue template shown.

## How to update documentation

***Please make note of all changes made, and update the changelog as appropriate***

Documentation is currently minimal, a read the docs is in the works and will be based on rst over md documents.

For the time being api documentation can be generated automatically via [Sami](https://github.com/FriendsOfPHP/Sami). A `sami_config.php` has been provided.

## Code review process

I will usually have reviewed any new issue, pull request, feature request or comment made within 6-12 hours of its creation, however I aim to respond within 24-48 hours of that initial review.
